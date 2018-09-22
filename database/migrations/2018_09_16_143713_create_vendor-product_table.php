<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendor-product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Productname');
            $table->string('Productdescription');
            $table->string('Productcategory');
            $table->string('Productimage');
            $table->integer('Price');
            $table->integer('Saleprice');
            $table->integer('Offerprice');
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
        Schema::dropIfExists('vendor-product');
    }
}
