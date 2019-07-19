<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Employee;
use App\Http\Requests\CreateAdminRequest;
use App\Http\Requests\AdminUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
         if(session('logged') == null){
            return redirect()->route('admin.login');
        }
        $employees = Employee::all();
        return view('admin_panel.list', compact('employees'));

    }
    public function profile()
    {
        if(session('logged') == null){
            return redirect()->route('admin.login');
        }
        $userId = Admin::admins()->id;
        $admins = Task::where('user_id',$userId)->get();

        return view('admin.profile', compact('admins'));

    }

    public function login()
    {
        return view('admin.login');
    }

    public function index()
    {
        if(session('logged') == null){
            return redirect()->route('admin.login');
        }

        $admins = Admin::all();
        return view('admin.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reg.adminreg');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateAdminRequest $request)
    {


        $input = $request->all();

        if($file = $request->file('file'))
        {
            $name = $file->getClientOriginalName();
            $file->move('images', $name);

            $input['path']= $name;
        }

        Admin::create($input);
        return redirect()->route('admin.login');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $admins = Admin::findOrFail($id);
        return view('admin.show', compact('admins'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        $admins = Admin::findOrFail($id);
        return view('admin.edit', compact('admins'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminUpdateRequest $request, $id)
    {
       
        $admins = Admin::findOrFail($id);
        $admins->update($request->all());
        return redirect('admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admins = Admin::findOrFail($id);
        $admins->delete();
        return redirect('admin');
    }
}
