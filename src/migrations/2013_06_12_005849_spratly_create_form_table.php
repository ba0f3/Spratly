<?php

use Illuminate\Database\Migrations\Migration;

class SpratlyCreateFormTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('spratly_forms', function($table){
            /** @var $table \Illuminate\Database\Schema\Blueprint */
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('model');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('spratly_form_fields', function($table){
            /** @var $table \Illuminate\Database\Schema\Blueprint */
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('form_id')->unsigned();
            $table->foreign('form_id')->references('id')->on('spratly_forms');
            $table->string('field');
            $table->string('name');
            $table->string('description');
            $table->enum('type', array('string', 'integer', 'float', 'decimal', 'boolean', 'date', 'datetime', 'time', 'timestamp', 'text', 'binary'));
            $table->enum('widget', array('input', 'datapicker', 'slider', 'range', 'textarea', 'radio'));
            $table->integer('order')->default(1);
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
        Schema::dropIfExists('spratly_forms');
        Schema::dropIfExists('spratly_form_fields');
	}

}