<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    public function index()
    {
        return view('kalkulator') ;
    }

    public function kalkulator(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;

        if (isset($_POST['tambah'])) {
            $hasil1= $angka1 + $angka2;
            return $hasil1;
        }

        if (isset($_POST['kurang'])) {
            $hasil2= $angka1 - $angka2;
            return $hasil2;
        }

        if (isset($_POST['bagi'])) {
            $hasil3= $angka1 / $angka2;
            return $hasil3;
        }

        if (isset($_POST['kali'])) {
            $hasil4= $angka1 * $angka2;
            return $hasil4;
        }

    }
}
