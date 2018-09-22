<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Company');
            $table->string('Username')->nullable();
            $table->string('Email');
            $table->string('Firstname');
            $table->string('Middlename')->nullable();
            $table->string('Lastname');
            $table->string('Password');
            $table->string('Address');
            $table->integer('Phonenumber');
            $table->string('City');
            $table->string('Country');
            $table->string('Postalcode');
            $table->enum('utype',['admin','user'])->default('user');
            $table->boolean('status')->default(1);
            $table->rememberToken();
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
        Schema::dropIfExists('vendors');
    }
}
