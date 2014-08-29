<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePackageItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('packageItems', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('package_id')->unsigned()->index();
            $table->string('description');
            $table->float('rate');
            $table->integer('quantity');
            $table->float('value');
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
		Schema::drop('packageItems');
	}

}
