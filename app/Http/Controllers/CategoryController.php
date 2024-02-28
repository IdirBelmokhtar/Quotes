<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Http\Resources\CategoryResource;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    public function index()
    {
        return CategoryResource::collection(Category::paginate(10));
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
        return new CategoryResource($Category);
    }

    public function update(UpdateCategoryRequest $request, $id)
    {
            DB::beginTransaction();
            $Category = Category::findOrFail($id);
            $Category->update(
                $request->validated()
            );
            DB::commit();
            return new CategoryResource($Category);
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
