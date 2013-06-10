<?php

use Illuminate\Database\Migrations\Migration;

class SpratlyCreateNavigationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('navigation', function($table){
            /** @var $table \Illuminate\Database\Schema\Blueprint */
            $table->increments('id');
            $table->integer('parent_id');
            $table->string('name');
            $table->string('icon');
            $table->string('path');
            $table->boolean('enabled');
            $table->timestamps();
            $table->softDeletes();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('navigation');
	}

}