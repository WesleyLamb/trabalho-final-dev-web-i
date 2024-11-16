<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Document extends Model
{
    use SoftDeletes;

    public function principalAuthor()
    {
        return $this->hasOneThrough(Author::class, DocumentAuthor::class, 'document_id', 'id', 'id', 'author_id');
    }
}
