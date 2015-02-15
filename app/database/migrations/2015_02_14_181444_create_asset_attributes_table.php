<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetAttributesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('asset_attributes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('asset_id');
                        $table->text('title');
                        $table->text('description');
                        $table->text('address');                        
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
		Schema::drop('asset_attributes');
	}

}
