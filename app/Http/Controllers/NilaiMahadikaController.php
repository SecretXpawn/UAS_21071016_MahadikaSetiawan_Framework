<?php

namespace App\Http\Controllers;

use App\Models\NilaiMahadika;
use Illuminate\Http\Request;

class NilaiMahadikaController extends Controller
{
        public function index()
    {
        $nilai = NilaiMahadika::get();      
       return view('nilaimahadika.index', compact('nilai'));
    }
    public function cetak_nilai(){
        $nilai = NilaiMahadika::get();
        return view ('nilaimahadika.cetak_nilaimahadika', compact('nilai'));
    }
}
