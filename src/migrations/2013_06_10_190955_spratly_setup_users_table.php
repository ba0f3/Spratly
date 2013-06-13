<?php
use Illuminate\Database\Migrations\Migration;

class SpratlySetupUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Creates the users table
        Schema::create('users', function($table)
        {
            /** @var $table \Illuminate\Database\Schema\Blueprint */
            $table->increments('id');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('role_id');

            $table->boolean('enabled')->default(false);
            $table->boolean('confirmed')->default(false);
            $table->dateTime('last_login');

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
        Schema::drop('users');
    }

}