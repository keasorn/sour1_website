<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applies', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->integer("job_id")->index();
            $table->char("first_name",50);
            $table->char("last_name",50);
            $table->char('position',50);
            $table->char('phone',15);
            $table->char('email',50);
            $table->integer("status");
            $table->char('attach_file',50);
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
        Schema::dropIfExists('applies');
    }
}
