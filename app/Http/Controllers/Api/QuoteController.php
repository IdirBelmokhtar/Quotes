<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Quote;
use App\Http\Requests\StoreQuoteRequest;
use App\Http\Requests\UpdateQuoteRequest;
use App\Http\Resources\QuoteResource;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

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
            $Category= Category::findOrFail($Quote->category_id);
            if($Category->type != 'quote'){
                return response()->json(['category_id' => 'Unvalid category'], 200);
            }
            DB::commit();
            return 'Quote is created';
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
            $Category= Category::findOrFail($Quote->category_id);
            if($Category->type != 'quote'){
                return response()->json(['category_id' => 'Unvalid category'], 200);
            }
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
