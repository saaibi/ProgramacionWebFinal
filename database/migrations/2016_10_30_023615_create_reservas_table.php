<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservasTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reservas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_usuario')->unsigned();
			$table->string('tipo_Escenario')->nullable();
			$table->integer('nombre_Escenario')->unsigned();
			$table->date('fecha')->nullable();
			$table->string('estado_Reserva')->nullable();
			$table->time('hora_Inicio')->nullable();
			$table->time('hora_Fin')->nullable();
			$table->timestamps();
			
			$table->foreign('id_usuario')->references('id')->on('users');
			$table->foreign('nombre_Escenario')->references('id')->on('futbol_cincos');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('reservas');
	}

}
