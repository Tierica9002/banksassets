<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResidentialComplex extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('residential_complexes', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->text('descriere');
                        $table->string('tip_imobil');
                        $table->string('stare_imobil');
                        $table->string('suprafata_teren');
                        $table->string('nr_imobile');
                        $table->string('regim_inaltime');
                        $table->string('structura_de_rezistenta');
                        $table->string('suprafata_construita');
                        $table->string('suprafata_utila');
                        $table->string('nr_locuinte');
                        $table->string('tip_locuinte'); 
                        $table->string('credit_imobiliar');
                        $table->string('credit_prima_casa');
                        $table->string('cash');
                        $table->string('loc_de_joaca');
                        $table->string('parc');
                        $table->string('parcare');
                        $table->string('gradinita');
                        $table->string('scoala');
                        $table->string('after_school');
                        $table->string('institutii_medicale');
                        $table->string('centre_comerciale');
                        $table->string('mijloace_transport');                                                   
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
		Schema::drop('residential_complexes');
	}
}
