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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('azienda', 255); 
            $table->string('stazione_di_partenza', 255);
            $table->string('stazione_di_arrivo', 255);
            $table->time('orario_di_partenza'); 
            $table->time('orario_di_arrivo'); 
            $table->smallInteger('codice_treno')->unsigned();
            $table->boolean('in_orario')->default(true);
            $table->boolean('cancellato')->default(false);
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
