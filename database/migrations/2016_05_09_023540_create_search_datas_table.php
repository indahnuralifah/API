<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSearchDatasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('search_datas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->String('depart_city');
			$table->String('arrive_city');
			$table->String('depart_date');
			$table->String('return_date');
			$table->Int('adult');
			$table->Int('child');
			$table->Int('infent');
			$table->Int('ver');
			$table->Longtext('result');
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
		Schema::drop('search_datas');
	}

}
