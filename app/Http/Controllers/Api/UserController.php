<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        return UserResource::collection(User::paginate(10));
    }

    public function store(StoreUserRequest $request)
    {
            DB::beginTransaction();
            $User = User::create($request->validated());
            DB::commit();
            return 'User is created';
    }

    public function show($id)
    {
        $User = User::findOrFail($id);
        return new UserResource($User);
    }

    public function update(UpdateUserRequest $request, $id)
    {
            DB::beginTransaction();
            $User = User::findOrFail($id);
            $User->update(
                $request->validated()
            );
            DB::commit();
            return new UserResource($User);
    }

    public function destroy($id)
    {
            DB::beginTransaction();
            $User = User::findOrFail($id);
            $User->delete();
            DB::commit();
            return 'User is deleted';
    }
}
