<?php

namespace App\Http\Controllers\Api;
use App\Models\Category;
use App\Http\Resources\CategoryRessource;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Http\Requests;
use Illuminate\Support\Facades\DB;
class CategoryController extends Controller
{

    public function index()
    {
        return CategoryRessource::collection(Category::paginate(10));
    }

    public function store(StoreCategoryRequest $request)
    {
            DB::beginTransaction();
            $Category = Category::create($request->validated());
            DB::commit();
            return 'Category are created';
    }

    public function show($id)
    {
        $Category = Category::findOrFail($id);
        return new CategoryRessource($Category);
    }

    public function update(UpdateCategoryRequest $request, $id)
    {
            DB::beginTransaction();
            $Category = Category::findOrFail($id);
            $Category->update(
                $request->validated()
            );
            DB::commit();
            return new CategoryRessource($Category);
    }

    public function destroy($id)
    {
            DB::beginTransaction();
            $Category = Category::findOrFail($id);
            $Category->delete();
            DB::commit();
            return 'Category is deleted';
    }
}

