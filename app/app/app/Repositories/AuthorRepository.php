<?php

namespace App\Repositories;

use App\DTO\StoreAuthorDTO;
use App\DTO\UpdateAuthorDTO;
use App\Models\Author;
use App\Repositories\Contracts\AuthorRepositoryInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class AuthorRepository implements AuthorRepositoryInterface
{
    public function getAll(): LengthAwarePaginator
    {
        return Author::paginate()->withQueryString();
    }

    public function store(StoreAuthorDTO $data): Author
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

    public function update(string $authorId, UpdateAuthorDTO $data): Author
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