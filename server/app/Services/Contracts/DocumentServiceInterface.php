<?php

namespace App\Services\Contracts;

use App\Http\Requests\StoreDocumentRequest;
use App\Http\Requests\UpdateDocumentRequest;
use App\Http\Resources\DocumentResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

interface DocumentServiceInterface {
    public function index(Request $request): AnonymousResourceCollection;
    public function store(StoreDocumentRequest $request): DocumentResource;
    public function show(Request $request): DocumentResource;
    public function update(UpdateDocumentRequest $request): DocumentResource;
    public function destroy(Request $request): void;
}