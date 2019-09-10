<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Third extends Model
{
    //
    protected $fillable = [
        'emp_name', 'emp_email','emp_id','file_upload',
    ];
}
