<?php

namespace App\Services\Auth\DTO;

use App\Http\Requests\Auth\RegisterRequest;
use Spatie\LaravelData\Data;

class RegisterDTO extends Data
{
    public string $email;
    public string $password;
    public string $role;
    public string $name;
    public string $surname;
    public string $phone;
    public ?string $birthday;
    public string $country;
    public ?string $address;

    public static function fromRequest(RegisterRequest $registerRequest): self
    {
        return self::from([
            'email' => $registerRequest->getEmail(),
            'password' => $registerRequest->getPassword(),
            'role' => $registerRequest->getRole(),
            'name' => $registerRequest->getName(),
            'surname' => $registerRequest->getSurname(),
            'phone' => $registerRequest->getPhone(),
            'birthday' => $registerRequest->getBirthday(),
            'country' => $registerRequest->getCountry(),
            'address' => $registerRequest->getAddress(),
        ]);
    }
}
