<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlockTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('blocks', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->integer('residential_id');
                        $table->text('descriere');
                        $table->string('certificat_performanta_energetica');
                        $table->string('aer_conditionat');
                        $table->string('placaj_holuri_acces');
                        $table->string('marca_lift');
                        $table->string('fatada_polistiren');
                        $table->string('tamplarie_exterioara_pvc');
                        $table->string('usa_exterior_anti_efractie');
                        $table->string('gresie_faianta_import');
                        $table->string('centrale_termice_proprii');
                        $table->string('video_interfon');
                        $table->string('locuinte_racordate');                        
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
		Schema::drop('blocks');
	}

}
