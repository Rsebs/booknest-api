<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthLoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(AuthLoginRequest $request)
    {
        try {
            if (!Auth::attempt($request->only('email', 'password')))
                throw new \Exception('Wrong Credentials', 401);

            $user = Auth::user();
            if (!($user instanceof User))
                throw new \Exception('Bad request', 422);

            $user->tokens()->delete();

            $token = $user->createToken('api-token', ['*'], now()->addHours(24));

            $loginResponse = [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'avatar' => $user->avatar,
                'api_token' => $token->plainTextToken,
            ];
            return $this->successResponse($loginResponse, 'Login successful!');
        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(), 'An error occurred', $th->getCode());
        }
    }
}
