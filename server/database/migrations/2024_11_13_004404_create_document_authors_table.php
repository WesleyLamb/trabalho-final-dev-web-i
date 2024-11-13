<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document_authors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('document_id')->constrained()->onDelete('restrict');
            $table->foreignId('author_id')->constrained()->onDelete('restrict');
            $table->binary('principal_author', 1)->default(0);
            $table->binary('coauthor', 1)->default(0);
            $table->binary('orientator', 1)->default(0);

            $table->timestampsTz();

            $table->unique(['document_id', 'author_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('document_authors');
    }
};
