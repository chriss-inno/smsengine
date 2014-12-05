<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesSubscriptionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('message_subscription', function($table)
	    {
	        $table->increments('id');
	        $table->integer('messageid');
	        $table->integer('subscriptionid');
	        $table->dateTime('subscription_date');
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
		Schema::drop('message_subscription');
	}

}
