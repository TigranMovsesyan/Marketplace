<?php

namespace App\Services\Auth\DTO;

use App\Http\Requests\Auth\LoginRequest;
use Spatie\LaravelData\Data;

class LoginDTO extends Data
{
    public string $email;
    public string $password;

    public static function fromRequest(LoginRequest $loginRequest): self
    {
        return self::from([
            'email' => $loginRequest->getEmail(),
            'password' => $loginRequest->getPassword(),
        ]);
    }
}
