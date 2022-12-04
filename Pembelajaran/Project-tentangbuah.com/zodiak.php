<form action="" method="post">
    bulan:
    <input type="text" name="bulan">
    tanggal:
    <input type="text" name="tanggal">

    <input type="submit" name="kirim" value="Submit">
</form>

<?php 

    if (isset($_POST['kirim'])) {
        $bulan = $_POST['bulan'];
        $tanggal = $_POST['tanggal'];

        if ($bulan == 1) {
            if ($tanggal >= 1 && $tanggal <= 22 ) {
                echo "Zodiak anda Leo";
            }else{
                echo "Zodiak anda cancer";
            }
        }
    }

?>