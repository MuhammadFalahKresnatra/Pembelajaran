<?php 

// Variabel
    $menu = ["Home","Kontak","Sejarah","Jurusan"];
    $judul =["Apel","Jeruk","Mangga","Duren"];
    $deskripsi =[
        "Apel adalah buah...",
        "Jeruk juga buah...",
        "Mangga itu ya juga buah...",
        "Duren itu bukan buah..."
    ];

    for ($i=0; $i < 4; $i++) { 
        echo "<li> $menu[$i] </li>";
    }

    $link=[
        "home"      => "<a href='#'> Home </a> ",
        "kontak"    => "<a href='#'> Kontak </a> ",
        "sejarah"   => "<a href='#'> Sejarah </a> ",
        "jurusan"   => "<a href='#'> Jurusan </a> "
    ];
    echo $link["home"];

    foreach ($link as $key => $value) {
        echo "<li>";
        echo $value;
        echo "</li>";
    }

    // $tanggal = 31;
    // if ($tanggal >= 1 && $tanggal <= 31) {
    //     echo "benar";
    // }else{
    //     echo "salah";
    // }

    $nilai= 75;
    if ($nilai >= 0 && $nilai <= 100) {
        if ($nilai >= 70) {
            if ($nilai == 71) {
                echo "kkm";
            }
            if ($nilai > 71 && $nilai < 80) {
                echo "C";
            }
            if ($nilai >= 80 && $nilai < 90) {
                echo "B";
            }
            if ($nilai > 90 && $nilai <= 100) {
                echo "A";
            }
        }else {
            echo "Tidak lulus";
        }
    }else{
        echo "Nilai salah";
    }

echo "<br>"."<br>";

function zodiak($t,$b)
{
$tanggal = $t;
$bulan = $b;

if ($tanggal > 0 && $tanggal < 32 && $bulan > 0 && $bulan < 13) {
    if ($bulan == 1) {
        if ($tanggal >= 1 && $tanggal <= 20) {
            echo "Zodiak anda Capricorn";
        }else{
            echo "Zodiak anda Aquarius";
        }
    }
    if ($bulan == 2) {
        if ($tanggal >= 1 && $tanggal <= 20) {
            echo "Zodiak anda Aquarius";
        }else {
            echo "Zodiak anda Pisces";
        }
    }
    if ($bulan == 3) {
        if ($tanggal >= 1 && $tanggal <=20) {
            echo "Zodiak anda Pisces";
        }else{
            echo "Zodiak anda Aries";
        }
    }
    if ($bulan == 4) {
        if ($tanggal >= 1 && $tanggal <= 20) {
            echo "Zodiak anda Aries";
        }else{
            echo "Zodiak anda Taurus";
        }
    }
    if ($bulan == 5) {
        if ($tanggal >= 1 && $tanggal <= 20) {
            echo "Zodiak anda Taurus";
        }else{
            echo "Zodiak anda Gemini";
        }
    }
    if ($bulan == 6) {
        if ($tanggal >= 1 && $tanggal <=20) {
            echo "Zodiak anda Gemini";
        }else{
            echo "Zodiak anda Cancer";
        }
    }
    if ($bulan == 7) {
        if ($tanggal >= 1 && $tanggal <= 20) {
            echo "Zodiak anda Cancer";
        }else{
            echo "Zodiak anda Leo";
        }
    }
    if ($bulan == 8) {
        if ($tanggal >= 1 && $tanggal <=20) {
            echo "Zodiak anda Leo";
        }else{
            echo "Zodiak anda Virgo";
        }
    }
    if ($bulan == 9) {
        if ($tanggal >= 1 && $tanggal <= 20) {
            echo "Zodiak anda Virgo";
        }else{
            echo "Zodiak anda Libra";
        }
    }
    if ($bulan == 10) {
        if ($tanggal >= 1 && $tanggal <= 20) {
            echo "Zodiak anda Libra";
        }else{
            echo "Zodiak anda Scorpio";
        }
    }
    if ($bulan == 11) {
        if ($tanggal >= 1 && $tanggal <= 20) {
            echo "Zodiak anda Scorpio";
        }else{
            echo "Zodiak anda Sagitarius";
        }
    }
    if ($bulan == 12) {
        if ($tanggal >= 1 && $tanggal <= 20) {
            echo "Zodiak anda Sagitarius";
        }else{
            echo "Zodiak anda Capricorn";
        }
    }
}else {
    echo "Tanggal atau bulan salah";
}
}

zodiak(1,100);
for ($i=1; $i < 13 ; $i++) { 
    zodiak(25,$i);
    echo "<br>";
}

?>

