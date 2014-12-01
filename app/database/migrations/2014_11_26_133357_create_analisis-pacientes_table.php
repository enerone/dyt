<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnalisisPacientesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
    {
		    Schema::create('analisispacientes', function(Blueprint $table){
                $table->increments('id');
                $table->integer('id_paciente');
                $table->text('hemato');
                $table->text('hepato');
                $table->text('ecg');
                $table->text('placa_torax');
                $table->text('observaciones');
                $table->text('imagenes');
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
    Schema::drop('analisispacientes');
}

}
