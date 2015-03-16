<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppartmentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('appartments', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->integer('block_id');
                        $table->text('descriere');
                        $table->string('tip_imobil');
                        $table->string('stare_imobil');
                        $table->string('structura_de_rezistenta');
                        $table->string('nr_camere');
                        $table->string('suprafata_utilta');
                        $table->string('suprafata_construita');
                        $table->string('compartimentare');
                        $table->string('pivnita');
                        $table->string('curent');
                        $table->string('apa');
                        $table->string('canalizare');
                        $table->string('gaz');
                        $table->string('catv');
                        $table->string('telefon');
                        $table->string('apometre');
                        $table->string('centrala_proprie');
                        $table->string('calorifere');
                        $table->string('tamplarie_ferestre');
                        $table->string('usa_intrare');
                        $table->string('izolatii_termice_interior');
                        $table->string('izolatii_termice_exterior');
                        $table->string('parchet');
                        $table->string('gresie');                        
                        $table->string('usi_interior');
                        $table->string('pereti');
                        $table->string('hi_fi');
                        $table->string('interfon');
                        $table->string('lift');
                        $table->string('usa_metalica');
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
		Schema::drop('appartments');
	}

}
