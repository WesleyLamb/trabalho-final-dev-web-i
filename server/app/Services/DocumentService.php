<?php

namespace App\Services;

use App\Http\Resources\DocumentAbstractResource;
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
}