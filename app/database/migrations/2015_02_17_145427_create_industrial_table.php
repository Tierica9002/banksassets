<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndustrialTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('industrials', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->text('descriere');
                        $table->string('categorii_clasificare');
                        $table->string('stadiul_cladirii');
                        $table->double('suprafata_totala');
                        $table->double('suprafata_totala_inchiriat');
                        $table->double('spatiu_disponibil');
                        $table->double('spatiu_depozit_minim');
                        $table->double('cost_inchieriere_depozit');
                        $table->double('depozit_garantie_bancara');
                        $table->integer('durata_inchiriere_minima');
                        $table->integer('anul_constructiei');
                        $table->string('chiriasi');
                        $table->string('cladire');
                        $table->double('total_spatiu_depozit');
                        $table->double('spatiu_depozit_disponibil');
                        $table->double('cost_inchiriere_depozit_minim');                        
                        $table->double('cost_inchiriere_depozit_maxim');
                        $table->double('spatiu_total_birouri');
                        $table->double('spatiu_birou_disponibil');
                        $table->double('cost_inchiere_birouri_minim');
                        $table->double('cost_inchiriere_birouri_maxim');                        
                        $table->string('benzinarie');
                        $table->string('spatiu_manevre');
                        $table->string('productie');
                        $table->string('acces_transport_public');
                        $table->string('echipa_management_parc');
                        $table->string('restaurant');
                        $table->string('birouri');
                        $table->string('acces_autostrada');
                        $table->string('parcare_autovehicule');
                        $table->string('servicii_catering');
                        $table->string('access_separat_personal_birou');
                        $table->string('showroom');
                        $table->string('parcare_camioane');
                        $table->string('paza_permanenta');                        
                        $table->string('protectie_incendiu');
                        $table->string('generator_electric');
                        $table->string('sistem_sprinclere');
                        $table->string('cross_dock');
                        $table->string('depozitare_vrac');
                        $table->string('griaj_stalpi');
                        $table->string('inaltime_libera');
                        $table->string('incarcare_pardoseala');
                        $table->string('usi_andocare');
                        $table->string('acces_drivein');                                                                                               
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
		Schema::drop('industrials');
	}

}
