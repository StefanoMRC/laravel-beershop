<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beers', function (Blueprint $table) {
            $table->id();
            $table->string('immagine'); 
            $table->string('nome',45);
            $table->decimal('prezzo', 8, 2);
            $table->string('catchphrase');
            $table->string('tipologia',20);
            $table->string('colorazione',25);
            $table->boolean('filtrata')->default(true);
            $table->integer('gradazione');
            $table->string('confezione',45);
            $table->integer('litraggio');
            $table->string('zona_produzione',45);
            $table->year('prodotta_dal');
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
        Schema::dropIfExists('beers');
    }
}
