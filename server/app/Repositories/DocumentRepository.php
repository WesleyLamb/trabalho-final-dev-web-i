<?php

namespace App\Repositories;

use App\DTO\StoreDocumentDTO;
use App\DTO\UpdateDocumentDTO;
use App\Models\Document;
use App\Repositories\Contracts\DocumentRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Str;

class DocumentRepository implements DocumentRepositoryInterface {
    public function index(): Collection
    {
        return Document::get();
    }

    public function store(StoreDocumentDTO $data): Document
    {
        $document = new Document();

        $document->title = $data->title;
        $document->subtitle = $data->subtitle;
        $document->publication_year = $data->publicationYear;
        $document->abstract = $data->abstract;
        $slug = Str::slug($data->title) . '.pdf';
        while (Document::where('filename', $slug)->exists()) {
            $slug = Str::slug($data->title) . '-' . Str::random(5) . '.pdf';
        }
        $document->filename = $slug;
        $document->save();

        return $document->refresh();
    }

    public function getByIdOrFail($documentId): Document
    {
        return Document::where('uuid', $documentId)->firstOrFail();
    }

    public function update(string $documentId, UpdateDocumentDTO $data): Document
    {
        $document = $this->getByIdOrFail($documentId);

        if ($data->titleWasChanged) {
            $document->title = $data->title;
        }

        if ($data->subtitleWasChanged) {
            $document->subtitle = $data->subtitle;
        }

        if ($data->publicationYearWasChanged) {
            $document->publication_year = $data->publicationYear;
        }

        if ($data->abstractWasChanged) {
            $document->abstract = $data->abstract;
        }

        $document->save();
        return $document->refresh();
    }

    public function destroy($id): void
    {
        $document = $this->getByIdOrFail($id);
        $document->delete();
    }
}