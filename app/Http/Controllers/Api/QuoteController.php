<?php

namespace App\Http\Controllers\Api;
use App\Models\Quote;
use App\Http\Resources\QuoteRessource;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreQuoteRequest;
use App\Http\Requests\UpdateQuoteRequest;
use App\Models\Category;
use Illuminate\Http\Requests;
use Illuminate\Support\Facades\DB;
use function PHPSTORM_META\type;
use Illuminate\Database\Eloquent\ModelNotFoundException;

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
            try {
                $Category = Category::find($Quote->category_id);
                if (!$Category) {
                    throw new ModelNotFoundException('Category not found');
                }
            } catch (ModelNotFoundException $e) {
                return response()->json([
                    'error' => 'Category not found',
                    'message' => 'Would you like to create a new category?'
                ], 404);
            }
            if($Category->type != 'Qoute'){
                return response()->json(['category_id' => 'Unvalid category'], 200);
            }
            DB::commit();

            return new QuoteRessource($Quote);
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
            try{
                $Category= Category::findOrFail($Quote->category_id);
                }catch(ModelNotFoundException $e){
                    return response()->json([
                        'error' => 'Category not found',
                        'message' => 'Would you like to create a new category?'
                    ], 404);
            }
            if($Category->type != 'Qoute'){
                    return response()->json(['category_id' => 'Unvalid category'], 200);
            }
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

