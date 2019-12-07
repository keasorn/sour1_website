<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->char('title',50);
            $table->integer('number_vacancies');
            $table->integer('job_type')->index();
            $table->foreign("job_type")->references("id")->on("job_types");
            $table->integer('pow')->index();
            $table->foreign("pow")->references("id")->on("work_places");
            $table->float("salary",8,2);
            $table->integer('job_level')->index();
            $table->foreign("job_level")->references("id")->on("job_levels");
             $table->integer('user')->index();
            $table->foreign("user")->references("id")->on("users");
            $table->date("closing_date");
            $table->text('duties');
            $table->text('requirement');
            $table->text('note');
            $table->integer('status');
            $table->integer('publication');
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
        Schema::dropIfExists('jobs');
    }
}
