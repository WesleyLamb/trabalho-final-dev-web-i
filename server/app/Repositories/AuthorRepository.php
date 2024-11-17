<?php

namespace App\Repositories;

use App\DTO\StoreAuthorDTO as DTOStoreAuthorDTO;
use App\DTO\UpdateAuthorDTO as DTOUpdateAuthorDTO;
use App\Models\Author;
use App\Repositories\Contracts\AuthorRepositoryInterface;
use App\Repositories\Contracts\StoreAuthorDTO;
use App\Repositories\Contracts\UpdateAuthorDTO;
use Illuminate\Database\Eloquent\Collection;

class AuthorRepository implements AuthorRepositoryInterface
{
    public function getAll(): Collection
    {
        return Author::get();
    }

    public function store(DTOStoreAuthorDTO $data): Author
    {
        $author = new Author();

        $author->name = $data->name;
        $author->email = $data->email;
        $author->save();

        return $author->refresh();
    }

    public function getByIdOrFail($authorId): Author
    {
        return Author::where('uuid', $authorId)->firstOrFail();
    }

    public function update(string $authorId, DTOUpdateAuthorDTO $data): Author
    {
        $author = $this->getByIdOrFail($authorId);

        if ($data->nameWasChanged) {
            $author->name = $data->name;
        }

        if ($data->emailWasChanged) {
            $author->email = $data->email;
        }

        $author->save();

        return $author->refresh();
    }

    public function destroy($id): void
    {
        $author = $this->getByIdOrFail($id);
        $author->delete();
    }
}