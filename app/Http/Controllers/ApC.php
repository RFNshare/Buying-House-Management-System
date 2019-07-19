<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;

class ApC extends Controller
{
    public function index($id)
    {
        // get the redirection from db using $url
        // and redirect ;)
        $admins = Admin::findOrFail($id);
        return view('admin.show', compact('admins'));
    }
}
