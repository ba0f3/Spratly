<?php

use Illuminate\Database\Migrations\Migration;

class SpratlyCreateRolesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('spratly_roles', function($table){
            /** @var $table \Illuminate\Database\Schema\Blueprint */
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->boolean('default')->default(false);
            $table->boolean('removable')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('spratly_permissions', function($table){
            /** @var $table \Illuminate\Database\Schema\Blueprint */
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->enum('status', array('active', 'inactive'));
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('spratly_roles_permissions', function($table){
            /** @var $table \Illuminate\Database\Schema\Blueprint */
            $table->integer('role_id');
            $table->integer('permission_id');
            $table->primary(array('role_id', 'permission_id'));
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::dropIfExists('spratly_roles');
        Schema::dropIfExists('spratly_permissions');
        Schema::dropIfExists('spratly_roles_permissions');
	}

}