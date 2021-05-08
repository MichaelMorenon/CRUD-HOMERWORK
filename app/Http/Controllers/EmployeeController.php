<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;


class EmployeeController extends Controller
{
    public function index()
    {
        // select * from users
        //$users = User::all();
        $employees = employee::orderBy('id', 'desc')->paginate(8);
        return view('employee.index', compact('employees'));
    }
    public function create()
    {
        $companies = Company::all();
        return view('employee.create', compact('companies'));
    }

    // true, false
    public function store(Request $request)
    {
        //return $request->all();
        $employee= Employee::create($request->all());
        return redirect('employee');
    }
    public function  edit($id)
    {
        $employee = Employee::find($id);
        $companies=Company::all();
        return view('employee/edit', compact('employee', 'companies'));
    }
    public function update(Request $request, $id){

        $employee =Employee::find($id)->update($request->all());
        return redirect('employee');


    }
    public function show($id){
        $employee = Employee::find($id);
        $companies=Company::all();
        return  view('employee.show', compact('employee', 'companies'));
    }
    public function destroy($id){
        $employee = Employee::find($id)->delete();
        return redirect('employee');

    }

}
