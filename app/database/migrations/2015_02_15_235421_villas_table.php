<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VillasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('villas', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->integer('asset_id');
                        $table->text('descriere');
                        $table->integer('nr_camere');
                        $table->float('suprafata_utila');
                        $table->float('suprafata_construita');
                        $table->float('suprafata_teren');
                        $table->integer('nr_etaje');
                        $table->string('compartimentare');
                        $table->integer('nr_bucatarii');                        
                        $table->integer('nr_bai');                        
                        $table->integer('nr_balcoane');                        
                        $table->integer('nr_terase');                        
                        $table->string('pivnita');                        
                        $table->string('tip_imobil');                        
                        $table->string('stare_imobil');                        
                        $table->integer('an_constructie');
                        $table->string('structura_rezistenta');
                        $table->string('regim_inaltime');
                        $table->string('modalitati_plata');
                        $table->string('parcare');
                        $table->string('paza_24');
                        $table->string('curent');
                        $table->string('apa');
                        $table->string('canalizare');
                        $table->string('gaz');
                        $table->string('catv');
                        $table->string('repartitoarea');
                        $table->string('apometre');
                        $table->string('calorifere');
                        $table->string('tamplarie_ferestre');
                        $table->string('usa_intrare');
                        $table->string('izolatii_termice');
                        $table->string('podele');
                        $table->string('usi_interior');
                        $table->string('pereti');
                        $table->string('scara_interioara');
                        $table->string('usa_metalica');
                        $table->string('centrala_proprie');
                        $table->string('wc_serviciu');
                        
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
		Schema::drop('villas');
	}

}
