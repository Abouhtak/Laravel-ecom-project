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
        Schema::create('addcards', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('produit_id_card');
            $table->foreign('produit_id_card')->references('id')->on('produits')->onDelete('cascade');
            $table->string('nom_p_card');
            $table->float('prix_card');
            $table->float('q_card');
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
        Schema::dropIfExists('addcards');
    }
};
