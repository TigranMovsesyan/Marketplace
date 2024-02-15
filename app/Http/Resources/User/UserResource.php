<?php

namespace App\Http\Resources\User;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'email' => $this->resource->email,
            'name' => $this->resource->name,
            'surname' => $this->resource->surname,
            'phone' => $this->resource->phone,
            'birthday' => $this->resource->birthday,
            'country' => $this->resource->country,
            'address' => $this->resource->address
        ];
    }
}
