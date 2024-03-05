<?php

namespace App\Http\Controllers\Api;
use App\Models\User;
use App\Http\Resources\UserRessource;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Models\Category;
use App\Models\Theme;
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
            try{
                $Category= Category::findOrFail($User->category_id);
                    }catch(ModelNotFoundException $e){
                    return response()->json([
                        'error' => 'Category not found',
                        'message' => 'Would you like to create a new category?'
                    ], 404);
                }
            try{
                    $Category= Category::findOrFail($User->category_id);
                        }catch(ModelNotFoundException $e){
                        return response()->json([
                            'error' => 'Category not found',
                            'message' => 'Would you like to create a new category?'
                        ], 404);
                }
            if($Category->type != 'Qoute'){
                return response()->json(['category_id' => 'Unvalid category'], 200);
            }
            if($Category->type != 'Theme'){
                return response()->json(['category_id' => 'Unvalid category'], 200);
            }
            DB::commit();
            return new UserRessource($User);

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
            try{
                $Category= Category::findOrFail($User->category_id);
                    }catch(ModelNotFoundException $e){
                    return response()->json([
                        'error' => 'Category not found',
                        'message' => 'Would you like to create a new category?'
                    ], 404);
                }
            try{
                    $Category= Category::findOrFail($User->category_id);
                        }catch(ModelNotFoundException $e){
                        return response()->json([
                            'error' => 'Category not found',
                            'message' => 'Would you like to create a new category?'
                        ], 404);
                }
            if($Category->type != 'Qoute'){
                return response()->json(['category_id' => 'Unvalid category'], 200);
            }
            if($Category->type != 'Theme'){
                return response()->json(['category_id' => 'Unvalid category'], 200);
            }
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

