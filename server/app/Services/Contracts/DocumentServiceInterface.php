<?php

namespace App\Services\Contracts;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

interface DocumentServiceInterface {
    public function index(Request $request): AnonymousResourceCollection;
}