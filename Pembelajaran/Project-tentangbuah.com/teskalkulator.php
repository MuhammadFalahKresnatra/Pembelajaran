<h1> Kalkulator </h1>
<form action="" method="post">
    Angka 1 :
    <input type="number" name="angka1">
    Angka 2 :
    <input type="number" name="angka2">

    <br><br>
    <input type="submit" name="tambah" value="+">
    <input type="submit" name="kurang" value="-">
</form>

<?php 

    if (isset($_POST['tambah'])) {
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $hasil1 = $angka1 + $angka2;

        echo $angka1.'+'.$angka2.' = '. $hasil1;
    }

    if (isset($_POST['kurang'])) {
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $hasil2 = $angka1 - $angka2;

        echo $angka1.'-'.$angka2.' = '. $hasil2;
    }


?>