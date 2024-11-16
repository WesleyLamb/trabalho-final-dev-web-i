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
        Schema::create('document_keywords', function (Blueprint $table) {
            $table->id();

            $table->foreignId('document_id')->constrained()->onDelete('restrict');
            $table->foreignId('keyword_id')->constrained()->onDelete('restrict');

            $table->unique(['document_id', 'keyword_id']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('document_keywords');
    }
};
