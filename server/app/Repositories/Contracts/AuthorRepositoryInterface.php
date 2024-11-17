<?php

namespace App\Repositories\Contracts;

use App\DTO\StoreAuthorDTO;
use App\DTO\UpdateAuthorDTO;
use App\Models\Author;
use Illuminate\Database\Eloquent\Collection;

interface AuthorRepositoryInterface
{
    public function getAll(): Collection;
    public function store(StoreAuthorDTO $data): Author;
    public function getByIdOrFail($authorId): Author;
    public function update(string $authorId, UpdateAuthorDTO $data): Author;
    public function destroy($id): void;
}