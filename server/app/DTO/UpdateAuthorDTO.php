<?php

namespace App\DTO;

use Illuminate\Http\Request;

class UpdateAuthorDTO implements BaseDTOInterface
{
    public string $name;
    public bool $nameWasChanged;
    public string $email;
    public bool $emailWasChanged;

    public static function createFromRequest(Request $request): BaseDTOInterface
    {
        $dto = new self();
        if ($request->has('name')) {
            $dto->nameWasChanged = true;
            $dto->name = $request->input('name');
        }

        if ($request->has('email')) {
            $dto->emailWasChanged = true;
            $dto->email = $request->input('email');
        }

        return $dto;
    }
}