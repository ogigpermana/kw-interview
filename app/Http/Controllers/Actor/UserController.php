<?php

namespace App\Http\Controllers\Actor;

use App\Models\Actor\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    // display all users
    public function showAllUsers()
    {
        return response()->json(User::all());
    }

    // display specific user
    public function showOneUser($id)
    {
        return response()->json(User::find($id));
    }

    public function create(Request $request)
    {
        $user = User::create($request->all());

        return response()->json($user, 201);
    }

    public function update($id, Request $request)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());

        return response()->json($user, 200);
    }

    public function delete($id)
    {
        User::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
