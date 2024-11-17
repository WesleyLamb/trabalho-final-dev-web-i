<?php

namespace App\Services;

use App\DTO\StoreAuthorDTO;
use App\DTO\UpdateAuthorDTO;
use App\Http\Requests\StoreAuthorRequest;
use App\Http\Requests\UpdateAuthorRequest;
use App\Http\Resources\AuthorAbstractResource;
use App\Http\Resources\AuthorResource;
use App\Models\Author;
use App\Repositories\Contracts\AuthorRepositoryInterface;
use App\Services\Contracts\AuthorServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class AuthorService implements AuthorServiceInterface
{
    public AuthorRepositoryInterface $authorRepository;

    public function __construct(AuthorRepositoryInterface $authorRepository)
    {
        $this->authorRepository = $authorRepository;
    }

    public function index(Request $request): AnonymousResourceCollection
    {
        return AuthorAbstractResource::collection($this->authorRepository->getAll($request));
    }

    public function store(StoreAuthorRequest $request): AuthorResource
    {
        return new AuthorResource($this->authorRepository->store(StoreAuthorDTO::createFromRequest($request)));
    }

    public function show(Request $request): AuthorResource
    {
        return new AuthorResource($this->authorRepository->getByIdOrFail($request->route('id')));
    }

    public function update(UpdateAuthorRequest $request): AuthorResource
    {
        return new AuthorResource($this->authorRepository->update($request->route('id'), UpdateAuthorDTO::createFromRequest($request)));
    }

    public function destroy(Request $request): void
    {
        $this->authorRepository->destroy($request->route('id'));
    }
}