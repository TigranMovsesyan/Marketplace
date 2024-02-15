<?php

namespace App\Services\Auth\Actions;

use App\Models\User;
use App\Services\Auth\DTO\LoginDTO;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;

class LoginAction
{
    public function run(LoginDTO $dto): JsonResponse
    {
        $user = User::query()->where('email', $dto->email)->first();

        if ($user && Hash::check($dto->password, $user->password)) {
            $token = $user->createToken('access token')->accessToken;

            return response()->json(['token' => $token], 200);
        } else {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }
}
