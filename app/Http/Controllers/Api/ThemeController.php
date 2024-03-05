<?php

namespace App\Http\Controllers\Api;
use App\Models\Theme;
use App\Models\Category;
use App\Http\Resources\ThemeRessource;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreThemeRequest;
use App\Http\Requests\UpdateThemeRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;


use Illuminate\Http\Requests;
use Illuminate\Support\Facades\DB;
class ThemeController extends Controller
{

    public function index()
    {
        return ThemeRessource::collection(Theme::paginate(10));
    }

    public function store(StoreThemeRequest $request)
    {
            DB::beginTransaction();
            $Theme = Theme::create($request->validated());
            try{
                $Category= Category::findOrFail($Theme->category_id);
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
                return new ThemeRessource($Theme);
    }

    public function show($id)
    {
        $Theme = Theme::findOrFail($id);
        return new ThemeRessource($Theme);
    }

    public function update(UpdateThemeRequest $request, $id)
    {
            DB::beginTransaction();
            $Theme = Theme::findOrFail($id);
            $Theme->update(
                $request->validated()
            );
            try{
                $Category= Category::findOrFail($Theme->category_id);
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
            return new ThemeRessource($Theme);
    }

    public function destroy($id)
    {
            DB::beginTransaction();
            $Theme = Theme::findOrFail($id);
            $Theme->delete();
            DB::commit();
            return 'Theme is deleted';
    }
}

