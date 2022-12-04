<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZodiakController extends Controller
{
    public function index()
    {
        $data=['nama'=>'erwin','alamat'=>'tegal gonong','sekolah'=>'mboh'];
        $judul = 'belajar laravel';
        return view('zodiac',['contoh'=>$data,'judul'=>$judul]);
    }

    public function zodiac(Request $request)
    {
        $bulan = $request->bulan;
        $tanggal = $request->tanggal;

        if ($bulan >=1 && $bulan <= 12 && $tanggal >= 1 && $tanggal <= 31) {
            if ($bulan ==1) {
                if ($tanggal >=1 && $tanggal <= 19) {
                    echo 'Zodiak anda Capricorn';
                }elseif ($tanggal >= 19 && $tanggal <= 31) {
                    echo 'Zodiak anda Aquarius';
                }
            }
            if ($bulan==2) {
                if ($tanggal >= 1 && $tanggal <=19) {
                    echo 'Zodiak anda Aquarius';
                }elseif ($tanggal >= 19 && $tanggal <= 31) {
                    echo 'Zodiak anda Pisces';
                }
            }
            if ($bulan==3) {
                if ($tanggal >= 1 && $tanggal <= 19) {
                    echo 'Zodiak anda Pisces';
                }elseif ($tanggal >= 19 && $tanggal <= 31 ) {
                    echo 'Zodiak anda Aries';
                }
            }
            if ($bulan==4) {
                if ($tanggal >= 1 && $tanggal <= 19) {
                    echo 'Zodiak anda Aries';
                }elseif ($tanggal >= 19 && $tanggal <= 31) {
                    echo 'Zodiak anda Taurus';
                }
            }
            if ($bulan==5) {
                if ($tanggal >= 1 && $tanggal <= 19) {
                    echo 'Zodiak anda Taurus';
                }elseif ($tanggal >= 19 && $tanggal <= 31) {
                    echo 'Zodiak anda Gemini';
                }
            }
            if ($bulan==6) {
                if ($tanggal >= 1 && $tanggal <= 19) {
                    echo 'Zodiak anda Gemini';
                }elseif ($tanggal >= 19 && $tanggal <= 31) {
                    echo 'Zodiak anda Cancer';
                }
            }
            if ($bulan==7) {
                if ($tanggal >= 1 && $tanggal <= 19) {
                    echo 'Zodiak anda Cancer';
                }elseif ($tanggal >= 19 && $tanggal <= 31) {
                    echo 'Zodiak anda Leo';
                }
            }
            if ($bulan==8) {
                if ($tanggal >= 1 && $tanggal <= 19) {
                    echo 'Zodiak anda Leo';
                }elseif ($tanggal >= 19 && $tanggal <= 31) {
                    echo 'Zodiak anda Virgo';
                }
            }
            if ($bulan==9) {
                if ($tanggal >= 1 && $tanggal <= 19) {
                    echo 'Zodiak anda Virgo';
                }elseif ($tanggal >= 19 && $tanggal <= 31) {
                    echo 'Zodiak anda Libra';
                }
            }
            if ($bulan==10) {
                if ($tanggal >= 1 && $tanggal <= 19) {
                    echo 'Zodiak anda Libra';
                }elseif ($tanggal >= 19 && $tanggal <= 31) {
                    echo 'Zodiak anda Scorpio';
                }
            }
            if ($bulan==11) {
                if ($tanggal >= 1 && $tanggal <= 19) {
                    echo 'Zodiak anda Scorpio';
                }elseif ($tanggal >= 19 && $tanggal <= 31) {
                    echo 'Zodiak anda Sagitarius';
                }
            }
            if ($bulan==12) {
                if ($tanggal >= 1 && $tanggal <= 19) {
                    echo 'Zodiak anda Sagitarius';
                }elseif ($tanggal >= 19 && $tanggal <= 31) {
                    echo 'Zodiak anda Capricorn';
                }
            }
        }else {
            echo 'Bulan atau Tanggal salah';
        }
    }
}
