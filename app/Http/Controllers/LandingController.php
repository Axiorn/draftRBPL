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
    public function tambahProduk()
    {
        return view('tambahProduk');
    }
    public function kelolaStok()
    {
        return view('kelolaStok');
    }
    public function riwayatPembelian()
    {
        return view('riwayatPembelian');
    }
    public function owner()
    {
        return view('owner');
    }
}