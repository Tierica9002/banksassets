<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLandsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lands', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->text('descriere');
                        $table->string('tip_destinatie');                        
                        $table->double('suprafata');
                        $table->double('front_stradal');
                        $table->double('nr_fronturi');
                        $table->string('reglementari_urbanistice');
                        $table->double('pot');
                        $table->double('cut');
                        $table->string('regim_inaltime');
                        $table->string('scos_circuit_agricol');
                        $table->string('cadastru');                        
                        $table->string('intabulare');                        
                        $table->string('proiect_constructie');                        
                        $table->string('apa');                        
                        $table->string('canalizare');                        
                        $table->string('gaz');                                
                        $table->string('curent');
                        $table->string('amenajare_strazi_asfaltate');                        
                        $table->string('mijloace_transport');                        
                        $table->string('iluminat_stradal');                        
                        $table->string('oportunitate_investitie');                        
                        $table->string('teren_imprejmuit');                                                                        
                        
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
		Schema::drop('lands');
	}

}
