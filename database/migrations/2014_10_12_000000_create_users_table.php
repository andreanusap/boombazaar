<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('username',50);
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->rememberToken();
            $table->date('birthDate')->nullable();
            $table->boolean('isVerified');
            $table->integer('cityId')->nullable();
            $table->string('address',150)->nullable();
            $table->string('postalCode',10)->nullable();
            $table->string('phoneHome',20)->nullable();
            $table->string('phoneCell',20)->nullable();
            $table->string('facebook_id',100)->nullable();
            $table->string('google_id',100)->nullable();
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
        Schema::drop('users');
    }
}
