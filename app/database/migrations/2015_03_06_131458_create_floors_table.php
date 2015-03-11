<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFloorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('office_floors', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->integer('office_id');
                        $table->integer('nr');
                        $table->double('surface');
                        $table->double('rent_cost');
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
		Schema::drop('office_floors');
	}

}
