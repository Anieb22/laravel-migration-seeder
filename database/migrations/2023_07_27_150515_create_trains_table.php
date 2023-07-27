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
            $table->string('azienda', 40);
            $table->string('stazione_di_partenza,', 100);
            $table->string('stazione_di_arrivo', 100);
            $table->date('data_partenza');
            $table->date('data_arrivo');
            $table->timestamp('orario_di_partenza');
            $table->time('orario_di_arrivo');
            $table->integer('n_carrozza');
            $table->boolean('in_orario')->default(false);
            $table->time('tempo_ritardo')->nullable();
            $table->boolean('cancellato')->default(false);
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
