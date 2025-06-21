<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller {
    public function admin()
    {
        return view('moduls.admin.admin');
    }
    public function tambahProduk()
    {
        return view('moduls.admin.tambahProduk');
    }
    public function kelolaStok()
    {
        return view('moduls.admin.kelolaStok');
    }
    public function riwayatPembelian()
    {
        return view('moduls.admin.riwayatPembelian');
    }
    public function owner()
    {
        return view('moduls.admin.owner');
    }
}