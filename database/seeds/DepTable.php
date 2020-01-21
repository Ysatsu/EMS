<?php

use Illuminate\Database\Seeder;
// use Illuminate\Database\Eloquent\Model;
// use App\Department;

class DepTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('department')->insert([
            ['department_id' =>"1001",'department_name' =>'Sales'],
            ['department_id' =>"1002",'department_name' =>'Marketing'],
            ['department_id' =>"1003",'department_name' =>'IT'],
            ['department_id' =>"1004",'department_name' =>'Management'],
            ['department_id' =>"1005",'department_name' =>'Finance'],
            ['department_id' =>"1006",'department_name' =>'Accounting']
         ]);


    }
}
