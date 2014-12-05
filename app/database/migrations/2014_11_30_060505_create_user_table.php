<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('users', function($table)
	    {
	        $table->increments('id');
	        $table->string('fname');
	        $table->string('lname');
	        $table->string('email')->unique();
	        $table->string('username')->unique();
	         $table->string('phone');
	        $table->string('pass');
	        $table->string('sex');
	        $table->string('role');
	        $table->string('status');
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
		Schema::drop('users');
	}

}
