<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhonebookTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
	//
		Schema::create('phonebook', function($table)
	    {
	        $table->increments('id');
	        $table->string('firstname');
	        $table->string('middlename')->nullable();
	        $table->string('surname');
	        $table->string('organization')->nullable();
	        $table->string('email')->unique();
	        $table->string('nikname')->nullable();
	        $table->string('position')->nullable();
	        $table->string('telephone')->nullable();
	        $table->string('telephone2')->nullable();
	        $table->string('mobile')->nullable();
	        $table->string('mobile1')->nullable();
	        $table->date('dob')->nullable();
	        $table->date('status')->nullable();
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
		Schema::drop('phonebook');
	}


}
