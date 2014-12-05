<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscriberTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('subscriber', /**
             * @param $table
             */
        function($table)
	    {
	        $table->increments('id');
	        $table->string('fname')->nullable();
	        $table->string('sname')->nullable();
	        $table->string('phone')->nullable();
	        $table->string('email')->nullable();
	        $table->string('sex')->nullable();
	        $table->string('status')->nullable();
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
		Schema::drop('subscriber');
	}


}
