<?php

namespace App\Http\Controllers;

use App\Emp_info;
use App\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;



class PagesController extends Controller
{

    function home()
    {
        $infos = Emp_info::all();
        $departments = Department::all();

        $viewDep =[];

        foreach($departments as $dep => $depInfo)
        {
            $depID = $depInfo['department_id'];
            $depName = $depInfo['department_name'];
            $viewDep[$depID] = $depName;
        }


        return view('home', ['infos' => $infos, 'viewDep' => $viewDep]);

    }



    function new()
    {
        return view('new');
    }



    function store()
    {


        request()->validate([

            'lname' => 'required',
            'fname' => 'required',
            'sltDepartment' => 'required',
            'gender' => 'required'

        ]);


        $infos = new Emp_info();

        $infos -> last_name = request('lname');
        $infos -> first_name = request('fname');
        $infos -> department_id = request('sltDepartment');
        $infos -> gender = request('gender');
        $infos -> save();

        return redirect('/done');

    }



    function edit($employee_id)
    {

        $departments = Department::all();

        $viewDep =[];

        foreach($departments as $dep => $depInfo)
        {
            $depID = $depInfo['department_id'];
            $depName = $depInfo['department_name'];
            $viewDep[$depID] = $depName;
        }

        $info = Emp_info::find($employee_id);
        return view('edit', ['info' => $info, 'viewDep' => $viewDep]);

    }



    function doEdit($employee_id)
    {

            request()->validate([

                'lname' => 'required',
                'fname' => 'required',
                'sltDepartment' => 'required',
                'gender' => 'required'

            ]);


            $info = Emp_info::find($employee_id);

            $info -> last_name = request('lname');
            $info -> first_name = request('fname');
            $info -> department_id = request('sltDepartment');
            $info -> gender = request('gender');
            $info -> save();

            return redirect('/done');

    }



    function detail($employee_id)
    {
        $departments = Department::all();

        $viewDep =[];

        foreach($departments as $dep => $depInfo)
        {
            $depID = $depInfo['department_id'];
            $depName = $depInfo['department_name'];
            $viewDep[$depID] = $depName;
        }

        $info = Emp_info::find($employee_id);
        return view('detail', ['info' => $info, 'viewDep' => $viewDep]);

    }



    function delete($employee_id)
    {

        $departments = Department::all();

        $viewDep =[];

        foreach($departments as $dep => $depInfo)
        {
            $depID = $depInfo['department_id'];
            $depName = $depInfo['department_name'];
            $viewDep[$depID] = $depName;
        }

        $info = Emp_info::find($employee_id);

        return view('delete', ['info' => $info, 'viewDep' => $viewDep]);

    }



    function doDelete($employee_id)
    {
        DB::table('Emp_info')->where('employee_id', $employee_id)->delete();
        return redirect('/done');
    }



    function done()
    {
        return view('done');
    }

}
