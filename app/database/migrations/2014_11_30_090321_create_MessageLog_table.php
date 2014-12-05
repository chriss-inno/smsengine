<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessageLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
	Schema::create('MessageLog', function($table)
	    {
	        $table->increments('Id');
	        $table->datetime ('SendTime');
	        $table->datetime('ReceiveTime')->nullable();
	        $table->integer('StatusCode')->nullable();
	        $table->string('StatusText')->nullable();
	        $table->string('MessageTo')->nullable();
	        $table->string('MessageFrom')->nullable();
	        $table->string('MessageText')->nullable();

	        $table->string('MessageType')->nullable();
	        $table->string('MessageId')->nullable();
	        $table->string('ErrorCode')->nullable();
	        $table->string('ErrorText')->nullable();

	        $table->string('Gateway')->nullable();
	        $table->string('MessagePDU')->nullable();
	        $table->string('UserId')->nullable();
	        $table->string('UserInfo')->nullable();
	        
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
		Schema::drop('MessageLog');
	}

}
