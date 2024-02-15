<?php

namespace App\Services\Auth\Actions;

use App\Http\Resources\User\UserResource;
use App\Models\User;
use App\Services\Auth\DTO\RegisterDTO;

class RegisterAction
{
    public function run(RegisterDTO $dto): UserResource
    {
        $data = User::createModel($dto);
        $user = User::query()->create($data);

        return new UserResource($user);
    }
}
