<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Test;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\TestResource;
use App\Http\Requests\StoreTestRequest;
use App\Http\Requests\UpdateTestRequest;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return TestResource::collection(Test::paginate(10));
    }

    public function store(StoreTestRequest $request)
    {
            DB::beginTransaction();
            $Test = Test::create($request->validated());
            DB::commit();
            return 'Test are created';
    }

    public function show($id)
    {
        $Test = Test::findOrFail($id);
        return new TestResource($Test);
    }

    public function update(UpdateTestRequest $request, $id)
    {
            DB::beginTransaction();
            $Test = Test::findOrFail($id);
            $Test->update(
                $request->validated()
            );
            DB::commit();
            return new TestResource($Test);
    }

    public function destroy($id)
    {
            DB::beginTransaction();
            $Test = Test::findOrFail($id);
            $Test->delete();
            DB::commit();
            return 'Test is deleted';
    }
}
