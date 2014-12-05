<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscriptionCategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('subscription_category', function($table)
	    {
	        $table->increments('id');
	        $table->string('category_name')->unique();
	        $table->string('category_descriptions')->nullable();
	        $table->integer('userid');
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
		Schema::drop('subscription_category');
	}

}
