<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('isbn',15)->default('');
            $table->string('name')->default('');
            $table->text('content');
            $table->integer('quantity')->default(0);
            $table->double('price',10,2)->default(0);
            $table->unsignedTinyInteger('category')->default(0);
            $table->unsignedTinyInteger('status')->default(0);
            $table->string('link')->default('');
            $table->unsignedTinyInteger('deleted')->default(0);
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
        Schema::dropIfExists('products');
    }
}
