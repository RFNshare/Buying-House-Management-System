<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEmployeeRequest;
use App\Http\Requests\ElogRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EloginVerifyController extends Controller
{
    public function verify(ElogRequest $request){

        $uname = $request->username;
        $password = $request->input('password');

        $user = DB::table('employees')
            ->where('username', $uname)
            ->where('password', $password)
            ->first();

        if($user != null){

            $request->session()->put('elogged', $user);

            return redirect()->route('employee.index');
        }else{

            $request->session()->flash('message', 'Invalid username or password');
            return redirect()->route('employee.login', ['name'=>$uname]);
        }

    }
}
