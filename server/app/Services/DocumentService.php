<?php

namespace App\Services;

use App\Http\Resources\DocumentAbstractResource;
use App\Repositories\Contracts\DocumentRepositoryInterface;
use App\Services\Contracts\DocumentServiceInterface;
use Illuminate\Http\Request;

class DocumentService implements DocumentServiceInterface {
    public DocumentRepositoryInterface $documentRepository;

    public function __construct(DocumentRepositoryInterface $documentRepository)
    {
        $this->documentRepository = $documentRepository;
    }

    public function index(Request $request)
    {
        return DocumentAbstractResource::collection($this->documentRepository->index());
    }
}