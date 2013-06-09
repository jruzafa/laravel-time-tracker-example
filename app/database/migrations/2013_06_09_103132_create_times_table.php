<?php

use Illuminate\Database\Migrations\Migration;

class CreateTimesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::create('times', function($table){

            $table->increments('id');
            $table->string('name');
            $table->float('hours');
            $table->integer('project_id');
            $table->integer('user_id');
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
		//
        Schema::dropIfExists('times');
	}

}