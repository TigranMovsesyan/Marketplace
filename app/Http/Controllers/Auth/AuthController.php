<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Resources\User\UserResource;
use App\Services\Auth\Actions\LoginAction;
use App\Services\Auth\Actions\RegisterAction;
use App\Services\Auth\DTO\LoginDTO;
use App\Services\Auth\DTO\RegisterDTO;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(
        RegisterRequest $request,
        RegisterAction $registerAction
    ): UserResource {
        $dto = RegisterDTO::fromRequest($request);

        return $registerAction->run($dto);
    }

    public function login(
        LoginRequest $loginRequest,
        LoginAction $loginAction
    ): JsonResponse {
        $dto = LoginDTO::fromRequest($loginRequest);

        return $loginAction->run($dto);
    }

    public function logout(Request $request): JsonResponse
    {
        $user = $request->user();
        $user->tokens()->delete();

        return response()->json(['message' => 'Successfully logged out']);
    }
}
