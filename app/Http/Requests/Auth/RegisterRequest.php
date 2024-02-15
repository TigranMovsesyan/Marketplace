<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public const EMAIL = 'email';
    public const PASSWORD = 'password';
    public const ROLE = 'role';
    public const NAME = 'name';
    public const SURNAME = 'surname';
    public const PHONE = 'phone';
    public const BIRTHDAY = 'birthday';
    public const COUNTRY = 'country';
    public const ADDRESS = 'address';

    public function rules(): array
    {
        return [
            self::EMAIL => [
                'unique:users',
                'required',
                'email'
            ],
            self::PASSWORD => [
                'required',
                'string',
                'between:4,36'
            ],
            self::ROLE => [
                'required',
                'string',
                'in:buyer,seller'
            ],
            self::NAME => [
                'required',
                'string',
                'between:2,36'
            ],
            self::SURNAME => [
                'required',
                'string',
                'between:2,36'
            ],
            self::PHONE => [
                'nullable',
                'string',
            ],
            self::BIRTHDAY => [
                'nullable',
                'data',
            ],
            self::COUNTRY => [
                'nullable',
                'string',
            ],
            self::ADDRESS => [
                'nullable',
                'string',
            ]
        ];
    }

    public function getEmail(): string
    {
        return $this->get(self::EMAIL);
    }

    public function getPassword(): string
    {
        return $this->get(self::PASSWORD);
    }

    public function getRole(): ?string
    {
        return $this->get(self::ROLE);
    }

    public function getName(): string
    {
        return $this->get(self::NAME);
    }

    public function getSurname(): string
    {
        return $this->get(self::SURNAME);
    }

    public function getPhone(): ?string
    {
        return $this->get(self::PHONE);
    }

    public function getBirthday(): ?string
    {
        return $this->get(self::BIRTHDAY);
    }

    public function getCountry(): ?string
    {
        return $this->get(self::COUNTRY);
    }

    public function getAddress(): ?string
    {
        return $this->get(self::ADDRESS);
    }
}
