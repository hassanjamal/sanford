<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddExtraColumnToUsersTreesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users_trees', function(Blueprint $table)
		{
			$table->integer('package_id')->unsigned();	
			$table->float('amount');
			$table->bigInteger('dd_no');
            $table->date('dd_date');
            $table->date('dd_drawn_date');
            $table->string('insured_person');

		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users_trees', function(Blueprint $table)
		{
			$table->dropColumn([
                'package_id', 'amount', 'dd_no' , 'dd_date' , 'dd_drawn_date', 'insured_person'
            ]);
		});
	}

}
