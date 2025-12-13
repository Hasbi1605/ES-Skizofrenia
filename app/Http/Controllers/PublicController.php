<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home()
    {
        return view('public/home');
    }

    public function about()
    {
        return view('public/about');
    }

    public function screening()
    {
        return view('public/screening');
    }

    public function contact()
    {
        return view('public/contact');
    }

    public function referrals()
    {
        return view('public/referrals');
    }

    public function types()
    {
        return view('public/types');
    }

    public function paranoid()
    {
        return view('public/paranoid');
    }

    public function hebephrenic()
    {
        return view('public/hebephrenic');
    }

    public function residual()
    {
        return view('public/residual');
    }

    public function catatonic()
    {
        return view('public/catatonic');
    }

    public function undifferentiated()
    {
        return view('public/undifferentiated');
    }

    public function guide()
    {
        return view('public/guide');
    }
}
