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

            $table->string('Azienda', 25);
            $table->string('Stazione-di-partenza', 30);
            $table->string('Stazione-di-arrivo', 30);
            $table->time('Orario-di-partenza');
            $table->time('Orario-di-arrivo');
            $table->unsignedTinyInteger('Codice-treno');
            $table->unsignedTinyInteger('Numero-carrozze')->nullable();
            $table->boolean('In-orario', true);
            $table->boolean('Cancellato', false);

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
