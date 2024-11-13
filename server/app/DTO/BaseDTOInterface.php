<?php

namespace App\DTO;

use Illuminate\Http\Request;

interface BaseDTOInterface
{
    public static function createFromRequest(Request $request): self;
}