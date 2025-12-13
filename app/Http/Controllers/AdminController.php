<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
     public function dashboard() {
        return view('admin.dashboard');
    }
    public function tables() {
        return view('admin.tables');
    }

     public function charts() {
        return view('admin.charts');
    }
     public function login() {
        return view('admin.login');
    }
}
