<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('offices', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->text('descriere');
                        $table->string('categorii_clasificare');
                        $table->string('statutul_cladirii');
                        $table->integer('suprafata_totala_birouri');
                        $table->string('birou_disponibil');                       
                        $table->integer('birouri_min_inchiriat');
                        $table->double('rata_ocupare');
                        $table->double('cost_inchiriere_birouri');
                        $table->double('pret_vanzare');
                        $table->string('tip_parcare');
                        $table->double('cost_parcare');
                        $table->string('cafenea');
                        $table->string('parcare_pentru_vizitatori');
                        $table->string('cantina');
                        $table->string('parcare_in_apropiere');
                        $table->string('servicii_de_curierat');
                        $table->string('restaurant');
                        $table->string('parc_in_apropiere');
                        $table->string('control_access');
                        $table->string('sistem_antiincendiu');
                        $table->string('detectoare_fum_incendiu');
                        $table->string('tavan_fals');
                        $table->string('hvac');
                        $table->string('ventiloconvectoare_2_tevi');
                        $table->string('incalzire_centrala');
                        $table->string('contoare');
                        $table->string('geamuri_termopan');
                        $table->string('curatarea_ferestrelor_exterioare');
                        $table->string('paza_permanenta');
                        $table->string('intrenetinere_reparatii_lifturi');
                        $table->string('administratie_management_proprietate');
                        
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
		Schema::drop('offices');
	}

}
