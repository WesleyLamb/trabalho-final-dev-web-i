<?php

namespace App\Services;

use App\DTO\StoreDocumentDTO;
use App\DTO\UpdateDocumentDTO;
use App\Http\Requests\StoreDocumentRequest;
use App\Http\Resources\DocumentAbstractResource;
use App\Http\Resources\DocumentResource;
use App\Repositories\Contracts\DocumentRepositoryInterface;
use App\Services\Contracts\DocumentServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class DocumentService implements DocumentServiceInterface {
    public DocumentRepositoryInterface $documentRepository;

    public function __construct(DocumentRepositoryInterface $documentRepository)
    {
        $this->documentRepository = $documentRepository;
    }

    public function index(Request $request): AnonymousResourceCollection
    {
        return DocumentAbstractResource::collection($this->documentRepository->index());
    }

    public function store(StoreDocumentRequest $request): DocumentResource
    {
        return new DocumentResource($this->documentRepository->store(StoreDocumentDTO::createFromRequest($request)));
    }

    public function show(Request $request): DocumentResource
    {
        return new DocumentResource($this->documentRepository->getByIdOrFail($request->route('id')));
    }

    public function update(Request $request): DocumentResource
    {
        return new DocumentResource($this->documentRepository->update($request->route('id'), UpdateDocumentDTO::createFromRequest($request)));
    }
}