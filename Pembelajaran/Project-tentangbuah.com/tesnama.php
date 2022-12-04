

<?php 

    require_once('db.php');

    $sql = "SELECT * FROM tblteman";

    $hasil = $koneksi->query($sql);

    if (isset($_GET['update'])) {
        $id = $_GET['update'];
        $sql = "SELECT * FROM tblteman WHERE idteman=$id";

        $result = mysqli_query($koneksi,$sql);

        $row = mysqli_fetch_array($result);
        
    }else {
        $row[1] = "";
        $row[2] = "";
        $row[3] = "";
    }

?>

<form action="" method="post">
    Nama :
    <input type="text" name="nama" value="<?php echo $row[1] ?>">
    Alamat :
    <input type="text" name="alamat" value="<?php echo $row[2]?>">
    Asal Sekolah :
    <input type="text" name="asalsekolah" value="<?php echo $row[3]?>">

    <input type="submit" name="tambah" value="Tambah">
    <input type="submit" name="ubah" value="Ubah">
</form>

<?php

    if (isset($_POST['ubah'])) {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $asal = $_POST['asalsekolah'];

        $sql = "UPDATE tblteman SET nama='$nama',alamat='$alamat',asalsekolah='$asal' WHERE idteman=$id";
        
        $koneksi->query($sql);
        header('location:tesnama.php');
    }

    if (isset($_POST['tambah'])) {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $asal = $_POST['asalsekolah'];

        $sql ="INSERT INTO tblteman (nama,alamat,asalsekolah) VALUES ('$nama','$alamat','$asal')";
        $koneksi->query($sql);
        header('location:tesnama.php');
    }

    if (isset($_GET['hapus'])) {
        $id = $_GET['hapus'];
        $sql = "DELETE FROM tblteman WHERE idteman=$id";
        $koneksi->query($sql);
        header('location:tesnama.php');
    }

    echo '<table border>';
        echo '<tr>';
            echo '<th>ID Teman</th>';
            echo '<th>Nama</th>';
            echo '<th>Alamat</th>';
            echo '<th>Asal Sekolah</th>';
            echo '<th>Delete</th>';
            echo '<th>Update</th>';
        echo'</tr>';

    if ($hasil->num_rows > 0) {
        while ($row = $hasil->fetch_array()) {
            echo '<tr>'; 
                echo '<td>'.$row[0].'</td>';
                echo '<td>'.$row[1].'</td>';
                echo '<td>'.$row[2].'</td>';
                echo '<td>'.$row[3].'</td>';
                echo '<td><a href="?hapus='.$row[0].'">Hapus</a></td>';
                echo '<td><a href="?update='.$row[0].'">Update</a></td>';
            echo'</tr>';
        }
    }else{
        echo "KOSONG";
    }

    echo '</table>';

?>