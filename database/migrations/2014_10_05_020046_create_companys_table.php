<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->char('cp_first_name',50);
            $table->char('cp_last_name',50);
            $table->char('cp_position',50);
            $table->char('cp_phone',50);
            $table->char('cp_email',50);
            $table->char('cp_nation',50);
            $table->char('cp_address',255);
            $table->integer('cp_gender')->index();
            $table->foreign("cp_gender")->references("id")->on("genders");
            $table->char('com_name',100);
            $table->integer("com_type")->index();
            $table->foreign("com_type")->references("id")->on("company_types");
            $table->char('com_address',255);
            $table->char('com_tel',15);
            $table->char('com_phone',15);
            $table->char('com_email',15);
            $table->char('com_web',15);
            $table->text('com_description');
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
        Schema::dropIfExists('companys');
    }
}
