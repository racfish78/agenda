<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgendaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agenda', function (Blueprint $table) {
            $table->increments('id');
            $table->datetime('data_reserva_ini');
            $table->datetime('data_reserva_fim')->nullable();
            $table->datetime('data_devolucao')->nullable();
            $table->integer('id_veiculo');
            $table->integer('id_usuario');
            $table->integer('km_ini')->nullable();
            $table->integer('km_fim')->nullable();
            $table->string('os')->nullable();
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
        Schema::drop('agenda');
    }
}
