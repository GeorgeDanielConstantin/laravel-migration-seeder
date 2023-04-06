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
            $table->string("codice_treno")->unique();
            $table->string("azienda");
            $table->tinyInteger("numero_carrozze")->unsigned();
            $table->string("stazione_di_partenza");
            $table->string("stazione_di_arrivo");
            $table->dateTime("orario_di_partenza");
            $table->dateTime("orario_di_arrivo");
            $table->boolean("in_orario");
            $table->boolean("cancellato");
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
        Schema::dropIfExists('trains');
    }
};
