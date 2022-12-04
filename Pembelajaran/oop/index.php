<form action="" method="post">
    <input type="number" name="bulan" placeholder="Masukkan Bulan" id="">
    <input type="number" name="tanggal" placeholder="Masukkan Tanggal" id="">

    <input type="submit" name="submit" value="KIRIM" >
</form>

<?php 

    require_once 'zodiac.php';

    // $rumus = new Rumus;
    // echo $rumus -> luasLingkaran(5);
    // echo '<br>';
    // echo $rumus -> kelilingLingkaran(5);
    // echo '<br>';
    // echo $rumus -> luasPersegiPanjang(5,3);
    // echo '<br>';
    // echo $rumus -> kelilingPersegiPanjang(5,3);
    // echo '<br>';
    // echo $rumus -> luasSegitiga(5,3);
    // echo '<br>';
    // echo $rumus -> kelilingSegitiga(3);

    // $zodiac = new Zodiac;
    // echo $zodiac -> zodiac(1,5);

    if (isset($_POST['submit'])) {
        $b = $_POST['bulan'];
        $t = $_POST['tanggal'];

        echo Zodiac::zodiac($b,$t);
    }

    

?>