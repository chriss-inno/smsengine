<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscriberSubscriptionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('subscriber_subscription', function($table)
	    {
	        $table->increments('id');
	        $table->integer('subscriberid');
	        $table->integer('subscriptionid');
	        $table->datetime('subscription_date');
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
		Schema::drop('subscriber_subscription');
	}

}
