<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Quote;
use App\Http\Resources\QuoteResource;
use App\Http\Requests\StoreQuoteRequest;
use App\Http\Requests\UpdateQuoteRequest;

class QuoteController extends Controller
{
    public function index()
    {
        return QuoteResource::collection(Quote::paginate(10));
    }

    public function store(StoreQuoteRequest $request)
    {
            DB::beginTransaction();
            $Quote = Quote::create($request->validated());
            DB::commit();
            return 'Quote are created';
    }

    public function show($id)
    {
        $Quote = Quote::findOrFail($id);
        return new QuoteResource($Quote);
    }

    public function update(UpdateQuoteRequest $request, $id)
    {
            DB::beginTransaction();
            $Quote = Quote::findOrFail($id);
            $Quote->update(
                $request->validated()
            );
            DB::commit();
            return new QuoteResource($Quote);
    }

    public function destroy($id)
    {
            DB::beginTransaction();
            $Quote = Quote::findOrFail($id);
            $Quote->delete();
            DB::commit();
            return 'Quote is deleted';
    }
}
