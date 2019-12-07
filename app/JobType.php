<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobType extends Model
{
    //
    protected $fillable = [
        "id","title_en","title_jp","title_ch"
    ];
}
