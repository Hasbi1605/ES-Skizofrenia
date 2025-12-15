<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    // Controller Untuk Halaman Utama
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

    public function guide()
    {
        return view('public/guide');
    }

    //  Controller Untuk Detail Tipe

    public function paranoid()
    {
        return view('public.types-detail.paranoid');
    }

    public function hebephrenic()
    {
        return view('public.types-detail.hebephrenic');
    }

    public function residual()
    {
        return view('public.types-detail.residual');
    }

    public function catatonic()
    {
        return view('public.types-detail.catatonic');
    }

    public function undifferentiated()
    {
        return view('public.types-detail.undifferentiated');
    }

}
