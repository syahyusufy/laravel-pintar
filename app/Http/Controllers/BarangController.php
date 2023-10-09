<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function halaman_pertama(){
        return view('halaman_pertama');
    }

    public function halaman_kedua(){
        return view('halaman_kedua');
    }
}
