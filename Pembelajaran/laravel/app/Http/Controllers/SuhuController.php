<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuhuController extends Controller
{
    public function index()
    {
        return view('suhu');
    }

    public function suhu(Request $request)
    {
        $suhu = $request->suhu;
        $sebelum = $request->sebelum;
        $setelah = $request->setelah;

        if ($sebelum == 'C') {
            if ($setelah == 'C') {
                $hasil = $suhu . '℃';
            }
            if ($setelah == 'F') {
                $hasil = (9/5) * $suhu + 32 ;
            }
            if ($setelah == 'K') {
                $hasil = $suhu + 273;
            }
            if ($setelah == 'R') {
                $hasil = (4/5) * $suhu;
            }
        }

        if ($sebelum == 'R') {
            if ($setelah == 'C') {
                $hasil = (5/4) * $suhu;
            }
            if ($setelah == 'F') {
                $hasil = $suhu * (9/4) + 32;
            }
            if ($setelah == 'K') {
                $hasil = $suhu * (5/4) + 273.15;
            }
            if ($setelah == 'R') {
                $hasil = $suhu;
            }
        }

        if ($sebelum == 'F') {
            if ($setelah == 'C') {
                $hasil = ($suhu - 32) * (5/9);
            }
            if ($setelah == 'F') {
                $hasil = $suhu;
            }
            if ($setelah == 'K') {
                $hasil = ($suhu - 32) * (5/9) + 273.15;
            }
            if ($setelah == 'R') {
                $hasil = (4/9) * ($suhu - 32);
            }
        }

        if ($sebelum == 'K') {
            if ($setelah == 'C') {
                $hasil = $suhu - 273.15;
            }
            if ($setelah == 'F') {
                $hasil = ($suhu - 273.15) * (9/5) + 32 ;
            }
            if ($setelah == 'K') {
                $hasil = $suhu;
            }
            if ($setelah == 'R') {
                $hasil = ($suhu - 273.15) * (4/5);
            }
        }

        return '<h1>'.$hasil.'</h1>';
    }

}
