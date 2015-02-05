<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ComplexTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('complexes', function(Blueprint $table)
		{
			$table->increments('id')->primary();
			$table->string('complex_name'); 
                        $table->text('description');
			$table->tinyInteger('status');                        
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
		Schema::drop('complexes');
	}

}
