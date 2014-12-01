<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
    {
	    Schema::create('pacientes', function(Blueprint $table){
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('dni');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('codpos');
            $table->integer('edad');
            $table->string('altura');
            $table->date('fecnac');
            $table->float('peso');

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
        Schema::drop('pacientes');
    }

}
