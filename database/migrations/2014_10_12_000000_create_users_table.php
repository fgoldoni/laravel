<?php

use Illuminate\Support\Facades\Schema;
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
            $table->string('role')->default('user');
            $table->string('name');
            $table->string('first_name')->default('');
            $table->string('last_name')->default('');
            $table->string('email')->unique();
            $table->string('password');
            $table->ipAddress('visitor')->nullable();
            $table->string('title',100)->default('');
            $table->text('address')->nullable();
            $table->string('zipcode',10)->nullable();
            $table->string('city',60)->default('');
            $table->unsignedSmallInteger('country')->default(0);
            $table->string('phone1')->nullable();
            $table->string('phone2')->nullable();
            $table->string('fax')->nullable();
            $table->string('skype')->default('');
            $table->unsignedTinyInteger('active_user')->default(0);
            $table->string('personal_timezone',64)->default('');
            $table->timestamp('last_login')->nullable();
            $table->unsignedSmallInteger('login_failures')->default(0);
            $table->unsignedSmallInteger('locked_until')->default(0);
            $table->timestamp('last_password_change')->nullable();
            $table->unsignedSmallInteger('language')->nullable();
            $table->unsignedTinyInteger('system_account')->default(0);
            $table->unsignedTinyInteger('is_readonly')->default(0);
            $table->unsignedTinyInteger('deleted')->default(0);
            $table->string('confirmation_token')->nullable();
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
        Schema::drop('users');
    }
}
