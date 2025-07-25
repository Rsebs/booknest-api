<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthLoginRequest;
use App\Http\Requests\AuthRegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use PhpHelpers\Services\AuthService;

class AuthController extends Controller
{
    public function __construct(private AuthService $authService) {}

    public function login(AuthLoginRequest $request)
    {
        try {
            $authResponse = $this->authService->attemptLogin($request->email, $request->password);
            return $this->successResponse($authResponse, 'Login successful!');
        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(), 'An error occurred', $th->getCode());
        }
    }

    public function register(AuthRegisterRequest $request)
    {
        try {
            DB::beginTransaction();
            User::create($request->validated());
            $authResponse = $this->authService->attemptLogin($request->email, $request->password);
            DB::commit();
            return $this->successResponse($authResponse, 'Register successful!');
        } catch (\Throwable $th) {
            DB::rollBack();
            return $this->errorResponse($th->getMessage(), 'An error occurred', $th->getCode());
        }
    }

    public function logout() {
        try {
            $this->authService->logoutUser();
            return $this->successResponse([], 'Logout successful');
        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(), 'An error occurred', $th->getCode());
        }
    }
}
