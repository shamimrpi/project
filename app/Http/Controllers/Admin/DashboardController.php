<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
     public function dashboard(){
         return view('admin.dashboard');
     }
     public function table()
    {
        return view('admin.table');
    }

    public function form()
    {
        return view('admin.form');
    }
}
