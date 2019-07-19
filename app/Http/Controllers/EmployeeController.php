<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Http\Requests\CreateEmployeeRequest;
use App\Http\Requests\EmployeeUpdateRequest;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile($id)
    {
         if(session('elogged') == null){
            return redirect()->route('employee.login');
        }
        $employees = Employee::findOrFail($id);
        return view('employee.show', compact('employees'));
    }
    public function login()
    {
        return view('employee.login');
    }

    public function index()
    {
        if(session('elogged') == null){
            return redirect()->route('employee.login');
        }
        $employees = Employee::all();
        return view('employee.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.reg');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEmployeeRequest $request)
    {
            $get = new Employee;
            $get->name= $request->name;
            $get->cname= $request->cname;
            $get->cno= $request->cno;

            $get->username= $request->username;
            $get->password= $request->password;
            $get->save();
            return redirect()->route('employee.login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $employees = Employee::findOrFail($id);
        return view('employee.delete', compact('employees'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $employees = Employee::findOrFail($id);
        return view('employee.edit', compact('employees'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmployeeUpdateRequest $request, $id)
    {
        
        $employees = Employee::findOrFail($id);
        $employees->update($request->all());
        return redirect()->route('employee.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employees = Employee::findOrFail($id);
        $employees->delete();
        return redirect()->route('employee.list');

    }
}
