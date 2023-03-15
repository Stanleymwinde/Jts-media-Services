<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function about()
    {
        return view('user.about');
    }

    public function services()
    {
        return view('user.services');
    }
    public function contact()
    {
        return view('user.contact');
    }
    public function terms()
    {
        return view('user.terms');
    }
    public function privacy()
    {
        return view('user.privacy');
    }
    public function live()
    {
        return view('user.livecoverage');
    }
    public function studio()
    {
        return view('user.studio');
    }
    public function hiring()
    {
        return view('user.hiring');
    }
    public function dj()
    {
        return view('user.dj');
    }
    public function photography()
    {
        return view('user.photography');
    }
}
