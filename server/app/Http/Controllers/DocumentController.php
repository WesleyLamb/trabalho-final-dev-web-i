<?php

namespace App\Http\Controllers;

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
}
