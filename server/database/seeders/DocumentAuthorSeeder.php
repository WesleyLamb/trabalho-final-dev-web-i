<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Document;
use App\Models\DocumentAuthor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocumentAuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $doc1 = Document::where('title', 'A (im)possibilidade de edificações voltadas à hospedagem em Balneário Camboriú em terrenos com metragem inferior a 2.000m2')->first();
        $doc2 = Document::where('title', 'A influência do habitus na reprodução da estrutura escolar')->first();
        $doc3 = Document::where('title', 'A relação entre a pandemia, o adoecimento e a precarização do trabalho docente')->first();

        $author1 = Author::where('name', 'Wesley Ricardo Lamb')->first();
        $author2 = Author::where('name', 'Valdir Rugiski Jr')->first();
        $author3 = Author::where('name', 'Fabricio Bizotto')->first();

        DocumentAuthor::create([
            'document_id' => $doc1->id,
            'author_id' => $author1->id,
            'principal_author' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DocumentAuthor::create([
            'document_id' => $doc1->id,
            'author_id' => $author2->id,
            'coauthor' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DocumentAuthor::create([
            'document_id' => $doc1->id,
            'author_id' => $author3->id,
            'orientator' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DocumentAuthor::create([
            'document_id' => $doc2->id,
            'author_id' => $author2->id,
            'principal_author' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DocumentAuthor::create([
            'document_id' => $doc3->id,
            'author_id' => $author3->id,
            'principal_author' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
