<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('city', function (Blueprint $table) {
        	$table->increments('id');
        	$table->string('cityCode', 4);
        	$table->string('cityDescription', 50);
        	$table->integer('regionId');
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
        Schema::drop('city');
    }
}
