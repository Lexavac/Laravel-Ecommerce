<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControllerStudent extends Controller
{
    public function student(){
        return view('admin.student');
    }
}
