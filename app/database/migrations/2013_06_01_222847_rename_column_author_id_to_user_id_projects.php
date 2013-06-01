<?php

use Illuminate\Database\Migrations\Migration;

class RenameColumnAuthorIdToUserIdProjects extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::table('projects', function($table){

			$table->renameColumn('author_id','user_id');

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
	}

}