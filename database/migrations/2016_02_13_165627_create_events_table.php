<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
        	$table->increments('id');
        	$table->string('eventName', 150);
        	$table->string('eventDesc', 500);
        	$table->string('location', 300);
        	$table->string('termsCond', 500);
        	$table->integer('cityId');
        	$table->integer('organizerId');
        	$table->timestamps();
            $table->string('created_by',50)->nullable();
            $table->string('updated_by',50)->nullable();
            $table->integer('rowStatus');
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
    }
}
