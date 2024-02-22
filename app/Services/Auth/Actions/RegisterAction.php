<?php

namespace App\Services\Auth\Actions;

use App\Http\Resources\User\UserResource;
use App\Models\User;
use App\Services\Auth\DTO\RegisterDTO;
use Spatie\Permission\Models\Role;

class RegisterAction
{
    public function run(RegisterDTO $dto): UserResource
    {
        $data = User::createModel($dto);
        $user = User::query()->create($data);

        if ($user->role === 'buyer') {
            $role = Role::where('name', 'buyer')->first();
        } else if ($user->role === 'seller') {
            $role = Role::where('name', 'seller')->first();
        }

        $user->assignRole($role);

        return new UserResource($user);
    }
}
