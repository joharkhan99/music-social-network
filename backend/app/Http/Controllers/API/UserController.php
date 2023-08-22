<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UpdateUserRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $user = User::findOrFail($id);

            return response()->json([
                'user' => $user
            ], 200);
        } catch (Exception $ex) {
            return response()->json([
                'message' => "Something went wrong in show method",
                'error' => $ex->getMessage()
            ], 400);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, string $id)
    {
        try {
            $user = User::findOrFail($id);

            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            // $user->email = $request->email;
            // $user->description = $request->description;

            $user->save();

            return response()->json([
                'message' => 'User updated successfully',
                'user' => $user
            ], 200);
        } catch (Exception $ex) {
            return response()->json([
                'message' => "Something went wrong in update method",
                'error' => $ex->getMessage()
            ], 400);
        }
    }
}
