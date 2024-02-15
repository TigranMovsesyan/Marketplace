<?php

namespace App\Models;

use App\Services\Auth\DTO\RegisterDTO;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'surname',
        'phone',
        'birthday',
        'country',
        'address'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public static function createModel(RegisterDTO $dto): array
    {
        return [
            'email' => $dto->email,
            'password' => Hash::make($dto->password),
            'role' => $dto->role,
            'name' => $dto->name,
            'surname' => $dto->surname,
            'phone' => $dto->phone,
            'birthday' => $dto->birthday,
            'country' => $dto->country,
            'address' => $dto->address,
        ];
    }
}
