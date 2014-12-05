<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessageInTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
	Schema::create('MessageIn', function($table)
	    {
	        $table->increments('Id');
	        $table->datetime('SendTime');
	        $table->datetime('ReceiveTime')->nullable();
	        $table->string('MessageFrom')->nullable();
	        $table->string('MessageTo')->nullable();
	        $table->string('SMSC')->nullable();
	        $table->string('MessageText')->nullable();
	        $table->string('MessageType')->nullable();
	        $table->string('MessagePDU')->nullable();

	        $table->string('Gateway')->nullable();
	        $table->datetime('UserId')->nullable();
	        
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
		Schema::drop('MessageIn');
	}

}
