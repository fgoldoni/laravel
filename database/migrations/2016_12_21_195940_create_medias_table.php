<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titre',60)->default('');
            $table->string('link')->default('');
            $table->string('used')->default('');
            $table->string('type')->default(0);
            $table->enum('status', ['Published', 'Not published','Deleted'])->default('Not published');
            $table->string('deleted')->default(0);
            $table->timestamps();
        });

        Schema::table('products', function (Blueprint $table) {            
            $table->integer('media_id')->unsigned()->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medias');
    }
}
