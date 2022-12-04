<?php

    class Zodiac{

        public static function zodiac($b,$t){
            if ($b < 1 || $b > 12 && $t < 1 || $t > 31) {
                $hasil = 'Tanggal atau Bulan Salah';
            }else {
                if ($b == 1) {
                    if ($t > 19 && $t < 31) {
                        $hasil = 'Aquarius';
                    }
                    if ($t > 0 && $t < 20) {
                        $hasil = 'Capricorn';
                    }
                }
                if ($b == 2) {
                    if ($t > 19 && $t < 31) {
                        $hasil = 'Pisces';
                    }
                    if ($t > 0 && $t < 20) {
                        $hasil = 'Aquarius';
                    }
                }
                if ($b == 3) {
                    if ($t > 19 && $t < 31) {
                        $hasil = 'Aries';
                    }
                    if ($t > 0 && $t < 20) {
                        $hasil = 'Pisces';
                    }
                }
            }
            return $hasil;
        }
    }

?>