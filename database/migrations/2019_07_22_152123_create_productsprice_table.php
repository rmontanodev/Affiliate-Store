<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductspriceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productsprice', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('Product_id');
            $table->float('Price');
            $table->float('SendPrice');
            $table->float('TotalPrice');
            $table->integer('Reviews')->default(0);
            $table->float('Rating');
            $table->string('Url');
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
        Schema::dropIfExists('productsprice');
    }
}
