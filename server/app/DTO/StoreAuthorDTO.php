<?php

namespace App\DTO;

use Illuminate\Http\Request;

class StoreAuthorDTO implements BaseDTOInterface
{
    public string $name;
    public string $email;

    public function __construct(string $name, string $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public static function createFromRequest(Request $request): BaseDTOInterface
    {
        return new self($request->input('name'), $request->input('email'));
    }
}