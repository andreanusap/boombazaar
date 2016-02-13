<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventimagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventimages', function (Blueprint $table) {
        	$table->increments('id');
        	$table->string('imageurl', 500);
        	$table->integer('eventId');
        	$table->boolean('isPrimary');
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
