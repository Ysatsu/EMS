<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table  = 'Department';

    public $timestamps = false;

    protected $primaryKey = 'department_id';

}

