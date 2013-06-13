<?php

use Illuminate\Database\Migrations\Migration;

class SpratlyCreateMenuTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('spratly_menus', function($table){
            /** @var $table \Illuminate\Database\Schema\Blueprint */
            $table->increments('id');
            $table->integer('parent_id');
            $table->string('name');
            $table->string('alias')->unique();
            $table->string('icon');
            $table->string('path');
            $table->integer('order')->default(1);
            $table->boolean('enabled')->default(true);
            $table->boolean('removable')->default(false);
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
        Schema::drop('spratly_menus');
	}

}