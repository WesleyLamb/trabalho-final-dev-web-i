<?php

namespace App\Repositories\Contracts;

use App\DTO\StoreDocumentDTO;
use App\DTO\UpdateDocumentDTO;
use App\Models\Document;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface DocumentRepositoryInterface {
    public function getAll(): LengthAwarePaginator;
    public function store(StoreDocumentDTO $data): Document;
    public function getByIdOrFail(string $documentId): Document;
    public function update(string $documentId, UpdateDocumentDTO $data): Document;
    public function destroy($id): void;
}