<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpHelpers\Helpers\ApiResponse;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $users = User::all();
            return ApiResponse::successResponse($users, 'Users fetched successfully');
        } catch (\Throwable $th) {
            return ApiResponse::errorResponse('An error occurred while fetching the user data', 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        try {
            DB::beginTransaction();
            User::create($request->validated());
            DB::commit();
            return ApiResponse::successResponse([], 'User created successfully', 201);
        } catch (\Throwable $th) {
            DB::rollBack();
            return ApiResponse::errorResponse($th->getMessage(), 'Something went wrong while creating the user', 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
