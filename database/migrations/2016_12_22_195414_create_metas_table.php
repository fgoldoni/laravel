<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tag')->nullable();
            $table->timestamps();
        });


        Schema::create('meta_product', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('meta_id')->unsigned()->index();
            $table->integer('product_id')->unsigned()->index();
            $table->foreign('meta_id')->references('id')->on('metas')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('metas');
    }
}
