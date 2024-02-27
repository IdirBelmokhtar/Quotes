<?php

namespace App\Http\Controllers\Api;
use App\Models\Quote;
use App\Http\Resources\QuoteRessource;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreQuoteRequest;
use App\Http\Requests\UpdateQuoteRequest;
use Illuminate\Http\Requests;
use Illuminate\Support\Facades\DB;
class QuoteController extends Controller
{

    public function index()
    {
        return QuoteRessource::collection(Quote::paginate(10));
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
        return new QuoteRessource($Quote);
    }

    public function update(UpdateQuoteRequest $request, $id)
    {
            DB::beginTransaction();
            $Quote = Quote::findOrFail($id);
            $Quote->update(
                $request->validated()
            );
            DB::commit();
            return new QuoteRessource($Quote);
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

