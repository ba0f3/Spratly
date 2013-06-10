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
            $table->string('username');
            $table->string('email');
            $table->string('password');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('confirmation_code');
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