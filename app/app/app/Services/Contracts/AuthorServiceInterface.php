<?php

namespace App\Services\Contracts;

use App\Http\Requests\StoreAuthorRequest;
use App\Http\Requests\UpdateAuthorRequest;
use App\Http\Resources\AuthorResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

interface AuthorServiceInterface
{
    public function index(Request $request): AnonymousResourceCollection;
    public function store(StoreAuthorRequest $request): AuthorResource;
    public function show(Request $request): AuthorResource;
    public function update(UpdateAuthorRequest $request): AuthorResource;
    public function destroy(Request $request): void;
}