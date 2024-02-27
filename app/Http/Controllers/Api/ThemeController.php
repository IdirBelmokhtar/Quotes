<?php

namespace App\Http\Controllers\Api;
use App\Models\Theme;
use App\Http\Resources\ThemeRessource;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreThemeRequest;
use App\Http\Requests\UpdateThemeRequest;
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
            DB::commit();
            return 'Theme are created';
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

