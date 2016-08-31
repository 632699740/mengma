<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginCoontroller extends Controller
{
    public function loadlogin(){
        return view('admin/public/index');
    }
}
