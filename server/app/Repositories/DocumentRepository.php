<?php

namespace App\Repositories;

use League\CommonMark\Renderer\DocumentRendererInterface;

class DocumentRepository implements DocumentRendererInterface {
    public function index()
    {
        return 'DocumentRepository@index';
    }
}