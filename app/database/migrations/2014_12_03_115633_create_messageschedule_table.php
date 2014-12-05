<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagescheduleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('messageschedule', function($table)
	    {
	        $table->increments('Id');
	        $table->integer('messageid')->nullable();
	        $table->datetime('startdate')->nullable();
	        $table->datetime('enddate')->nullable();
	        
	        $table->integer('repeat')->nullable();
	        $table->string('mon')->nullable()->default(0);
	        $table->string('tue')->nullable()->default(0);
	        $table->string('wed')->nullable()->default(0);
	        $table->string('thu')->nullable()->default(0);
	        $table->string('fri')->nullable()->default(0);
	        $table->string('sat')->nullable()->default(0);
	        $table->string('sun')->nullable()->default(0);
	        
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
		Schema::drop('messageschedule');
	}


}
