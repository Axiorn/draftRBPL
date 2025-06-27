<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller {
    public function landing()
    {
        return view('moduls.landing.landing');
    }
    public function produk()
    {
        return view('moduls.landing.produk');
    }
    public function status()
    {
        return view('moduls.landing.status');
    }
    public function keranjang()
    {
        return view('moduls.landing.keranjang');
    }
    public function checkout()
    {
        return view('moduls.landing.checkout');
    }
     public function login()
    {
        return view('moduls.landing.login');
    }
    public function signup()
    {
        return view('moduls.landing.signup');
    }
    public function owner()
    {
        return view('moduls.admin.owner');
    }
}