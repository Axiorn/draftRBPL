<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller {
    public function landing()
    {
        return view('landing');
    }
    public function produk()
    {
        return view('produk');
    }
    public function status()
    {
        return view('status');
    }
    public function admin()
    {
        return view('admin');
    }
    public function keranjang()
    {
        return view('keranjang');
    }
    public function checkout()
    {
        return view('checkout');
    }
}