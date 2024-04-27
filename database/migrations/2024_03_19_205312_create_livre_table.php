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
        Schema::create('livre', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Titre',150);
            $table->date('Année_edition');
            $table->boolean('valide');
            $table->text('déscription');
            $table->string('lange');
            $table->string('Auteur');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livre');
    }
};
