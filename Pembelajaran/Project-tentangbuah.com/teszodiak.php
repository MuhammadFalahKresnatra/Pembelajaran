<h1>Zodiak</h1>
<form action="" method="post">
    Bulan :
    <input type="text" name="bulan">
    Tanggal : 
    <input type="text" name="tanggal">

    <input type="submit" name="submit" value="LIHAT ZODIAK">
</form>

<?php 

    if (isset($_POST['submit'])) {
        $bulan = $_POST['bulan'];
        $tanggal = $_POST['tanggal'];

        if ($bulan == 1) {
            if ($tanggal >= 1 && $tanggal <= 22) {
                echo "Zodiak anda Aries";
            }else {
                echo "Zodiak anda Taurus";
            }
        }
    }


?>