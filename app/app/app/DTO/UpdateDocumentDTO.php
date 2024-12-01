<?php

namespace App\DTO;

use Illuminate\Http\Request;

class UpdateDocumentDTO implements BaseDTOInterface
{
    public bool $titleWasChanged = false;
    public string $title;

    public bool $subtitleWasChanged = false;
    public ?string $subtitle;

    public bool $publicationYearWasChanged = false;
    public int $publicationYear;

    public bool $abstractWasChanged = false;
    public ?string $abstract;

    public bool $fileWasChanged = false;
    public string $file;

    public static function createFromRequest(Request $request): BaseDTOInterface
    {
        $dto = new self();
        if ($request->has('title')) {
            $dto->titleWasChanged = true;
            $dto->title = $request->input('title');
        }

        if ($request->has('subtitle')) {
            $dto->subtitleWasChanged = true;
            $dto->subtitle = $request->input('subtitle');
        }

        if ($request->has('publication_year')) {
            $dto->publicationYearWasChanged = true;
            $dto->publicationYear = $request->input('publication_year');
        }

        if ($request->has('abstract')) {
            $dto->abstractWasChanged = true;
            $dto->abstract = $request->input('abstract');
        }

        if ($request->has('file')) {
            $dto->fileWasChanged = true;
            $dto->file = $request->input('file');
        }

        return $dto;
    }
}