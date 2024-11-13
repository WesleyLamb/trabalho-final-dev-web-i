<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDocumentRequest;
use App\Http\Requests\UpdateDocumentRequest;
use App\Services\Contracts\DocumentServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class DocumentController extends Controller
{
    public DocumentServiceInterface $documentService;

    public function __construct(DocumentServiceInterface $documentService)
    {
        $this->documentService = $documentService;
    }

    public function index(Request $request): AnonymousResourceCollection
    {
        return $this->documentService->index($request);
    }

    public function store(StoreDocumentRequest $request)
    {
        return $this->documentService->store($request);
    }

    public function show(Request $request)
    {
        return $this->documentService->show($request);
    }

    public function update(UpdateDocumentRequest $request)
    {
        return $this->documentService->update($request);
    }
}
