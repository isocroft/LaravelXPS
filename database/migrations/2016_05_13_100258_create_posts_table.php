<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_posts', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('post_title');
            $table->string('post_caption')->nullable();
            $table->integer('user_id')->references('id')->on('users');
            $table->longText('post_description');

			$table->timestamps();

			// set to InnoDB
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_posts');
	}

}
