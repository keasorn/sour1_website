<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    protected $fillable = [
        "id","cp_first_name","cp_last_name","cp_position","cp_phone","cp_email","cp_nation","cp_address","cp_gender","com_name","com_type","com_address","com_tel","com_phone","com_email","com_web","com_description"
    ];
}
