<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //

    //
    protected $fillable = [
        "title","number_vacancies","job_type","job_level","pow","salary","closing_date","publication","duties","requirement","note","status","user"
    ];
}
