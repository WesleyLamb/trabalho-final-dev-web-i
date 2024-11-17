<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAuthorRequest;
use App\Http\Requests\UpdateAuthorRequest;
use App\Http\Resources\AuthorResource;
use App\Services\Contracts\AuthorServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class AuthorController extends Controller
{
    public AuthorServiceInterface $authorService;

    public function __construct(AuthorServiceInterface $authorService)
    {
        $this->authorService = $authorService;
    }

    public function index(Request $request): AnonymousResourceCollection
    {
        return $this->authorService->index($request);
    }

    public function store(StoreAuthorRequest $request): AuthorResource
    {
        return $this->authorService->store($request);
    }

    public function show(Request $request): AuthorResource
    {
        return $this->authorService->show($request);
    }

    public function update(UpdateAuthorRequest $request): AuthorResource
    {
        return $this->authorService->update($request);
    }

    public function destroy(Request $request): void
    {
        $this->authorService->destroy($request);
    }
}
