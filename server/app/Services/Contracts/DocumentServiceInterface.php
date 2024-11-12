<?php

namespace App\Services\Contracts;

use Illuminate\Http\Request;

interface DocumentServiceInterface {
    public function index(Request $request);
}