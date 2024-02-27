<?php

namespace App\Http\Controllers\Api;
use App\Models\User;
use App\Http\Resources\UserRessource;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Requests;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{

    public function index()
    {
        return UserRessource::collection(User::paginate(10));
    }

    public function store(StoreUserRequest $request)
    {
            DB::beginTransaction();
            $User = User::create($request->validated());
            DB::commit();
            return 'User are created';
    }

    public function show($id)
    {
        $User = User::findOrFail($id);
        return new UserRessource($User);
    }

    public function update(UpdateUserRequest $request, $id)
    {
            DB::beginTransaction();
            $User = User::findOrFail($id);
            $User->update(
                $request->validated()
            );
            DB::commit();
            return new UserRessource($User);
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

