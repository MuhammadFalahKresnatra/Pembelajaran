<form action="" method="post">
    angka1:
    <input type="number" name="angka1">
    angka 2:
    <input type="number" name="angka2">

    <input type="submit" name="tambah" value="+">
    <input type="submit" name="kurang" value="-">
    <input type="submit" name="kali" value="x">
    <input type="submit" name="bagi" value="/">

</form>

<?php 

    if (isset($_POST['tambah'])) {
        $angka1 = $_POST['angka1'];
        $angka2= $_POST['angka2'];
        $hasil1 = $angka1 + $angka2;

        echo $hasil1;
    }

    if (isset($_POST['kurang'])) {
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $hasil2 = $angka1 - $angka2;
        
        echo $hasil2;
    }

    if (isset($_POST['kali'])) {
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $hasil3 = $angka1 * $angka2;

        echo $hasil3;
    }

    if (isset($_POST['bagi'])) {
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $hasil4 = $angka1 / $angka2;

        echo $hasil4;
    }

?>