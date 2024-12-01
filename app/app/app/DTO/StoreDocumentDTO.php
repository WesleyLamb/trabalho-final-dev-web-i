<?php

namespace App\DTO;

use Illuminate\Http\Request;

class StoreDocumentDTO implements BaseDTOInterface
{
    public string $title;
    public ?string $subtitle;
    public int $publicationYear;
    public ?string $abstract;
    public string $file;

    public function __construct(string $title, ?string $subtitle, int $publicationYear, ?string $abstract, string $file)
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->publicationYear = $publicationYear;
        $this->abstract = $abstract;
        $this->file = $file;
    }

    public static function createFromRequest(Request $request): BaseDTOInterface
    {
        return new self(
            $request->input('title'),
            $request->input('subtitle'),
            (int) $request->input('publication_year'),
            $request->input('abstract'),
            $request->input('file')
        );
    }
}