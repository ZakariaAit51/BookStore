<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('cles', function (Blueprint $table) {
            $table->id();
            $table->string('cle');
            $table->boolean('statut');
            $table->bigInteger('jeu_id')->unsigned(); // Ensure it's unsigned
            $table->foreign('jeu_id')->references('id')->on('jeux')->onDelete('cascade'); // Re-add foreign key constraint
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cles');
    }
};
