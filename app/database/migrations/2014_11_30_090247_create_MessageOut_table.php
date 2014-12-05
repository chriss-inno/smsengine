<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessageOutTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
	Schema::create('MessageOut', function($table)
	    {
	        $table->increments('Id');
	        $table->string('MessageTo')->nullable();
	        $table->string('MessageFrom')->nullable();
	        $table->string('MessageText')->nullable();
	        $table->string('MessageType')->nullable();
	        $table->string('Gateway')->nullable();
	        $table->string('UserId')->nullable();
	        $table->string('UserInfo')->nullable();

	        $table->dateTime('Priority')->nullable();
	        $table->datetime('Scheduled')->nullable();
	        $table->string('IsSent')->nullable();
	        $table->string('IsRead')->nullable();
	        $table->integer('messageid')->nullable();
	        
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
		Schema::drop('MessageOut');
	}

}
