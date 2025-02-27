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

        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date');
            $table->integer('quantite');
            $table->enum('mode_reglement', ["carte_bancaire","paypal","payoneer"]);
            $table->double('prix_total');
            $table->bigInteger('jeu_id')->unsigned();
            $table->foreign('jeu_id')->references('id')->on('jeux');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commandes');
    }
};
