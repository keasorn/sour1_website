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
            $table->integer('id')->autoIncrement();
            $table->char('last_name',50);
            $table->char('first_name',50);
            $table->char('user_name',50)->unique();
            $table->char('email',50)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->char('img_profile',100)->nullable();
            $table->char('password',100);
            $table->integer('user_type')->index();
            $table->foreign('user_type')->references('id')->on('user_types');
            $table->integer('gender')->index();
            $table->foreign('gender')->references('id')->on('genders');
            $table->integer('company')->index();
            $table->foreign('company')->references('id')->on('companies');
            $table->integer('status');
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
        Schema::dropIfExists('users');
    }
}
