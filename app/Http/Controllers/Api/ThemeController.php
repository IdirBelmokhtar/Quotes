<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Theme;
use App\Http\Requests\StoreThemeRequest;
use App\Http\Requests\UpdateThemeRequest;
use App\Http\Resources\ThemeResource;
use Illuminate\Support\Facades\DB;

class ThemeController extends Controller
{
    public function index()
    {
        return ThemeResource::collection(Theme::paginate(10));
    }

    public function store(StoreThemeRequest $request)
    {
            DB::beginTransaction();
            $Theme = Theme::create($request->validated());
            DB::commit();
            return 'Theme is created';
    }

    public function show($id)
    {
        $Theme = Theme::findOrFail($id);
        return new ThemeResource($Theme);
    }

    public function update(UpdateThemeRequest $request, $id)
    {
            DB::beginTransaction();
            $Theme = Theme::findOrFail($id);
            $Theme->update(
                $request->validated()
            );
            DB::commit();
            return new ThemeResource($Theme);
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
