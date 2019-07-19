<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminLoginRequest;
use App\Http\Requests\CreateAdminRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginVerify extends Controller
{
    public function verify(AdminLoginRequest $request){

        $uname = $request->username;
        $password = $request->input('password');

        $user = DB::table('admins')
            ->where('username', $uname)
            ->where('password', $password)
            ->first();

        if($user != null){

            $request->session()->put('logged', $user);

            return redirect()->route('admin.index');
        }else{

            $request->session()->flash('message', 'Invalid username or password');
            return redirect()->route('admin.login', ['name'=>$uname]);
        }

    }
}
