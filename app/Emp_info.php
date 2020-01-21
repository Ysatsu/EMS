<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emp_info extends Model
{
    protected $table = 'Emp_info';

    public $timestamps = false;

    protected $primaryKey = 'employee_id';
}
