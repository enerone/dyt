<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSedesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sedes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre_sede');
			$table->string('localidad');
			$table->string('provincia');
			$table->string('responsable_sede');
			$table->string('email_responsable_sede');
			$table->string('telefono_responsable_sede');

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
		Schema::drop('sedes');
	}

}
