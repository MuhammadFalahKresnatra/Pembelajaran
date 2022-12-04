<?php
    require_once('db.php');

    if (isset($_GET['id'])&isset($_GET['menu'])) {
        $id = $_GET['id'];
        $menu = $_GET['menu'];
        if ($menu == 'hapus') {
            $buah = '';
            $deskripsi = '';
            $harga = '';
            $sql ="DELETE FROM tblbuah WHERE idbuah = $id";
            // echo $sql;
            $koneksi->query($sql);
            header("location:./");
        }else {
            $sql = "SELECT * FROM tblbuah WHERE idbuah= $id";
            $hasil = $koneksi->query($sql);

            $row = $hasil->fetch_array();
            // print_r($row);
            
                $buah = $row['1']; 
                $deskripsi = $row['2'];
                $harga = $row['3'];
            }
            
        }else {
            $buah = '';
            $deskripsi = '';
            $harga = '';
        }
        


    // $buah = 'Apel';
    // $deskripsi = 'Apel Merah';
    // $harga = 12000;

?>
<form action="" method="post">
    Buah :
    <input type="text" name="buah" value="<?php echo $buah ?> ">
    
    Deskripsi :
    <input type="text" name="deskripsi" value="<?php echo $deskripsi  ?>">
    
    Harga :
    <input type="number" name="harga" value="<?php echo $harga ?>" >

    <input type="submit" name="simpan" value="Simpan">
</form>


<?php 

    if (isset($_POST['simpan'])) {
        
        if (isset($_GET['menu'])) {
            $id = $_GET['id'];
            $buah = $_POST['buah'];
            $deskripsi = $_POST['deskripsi'];
            $harga = $_POST['harga'];
            $sql = "UPDATE tblbuah SET buah='$buah', deskripsi='$deskripsi', harga=$harga WHERE idbuah=$id";
            $koneksi->query($sql);
            header("location:index.php");
        }else {
            $buah = $_POST['buah'];
            $deskripsi = $_POST['deskripsi'];
            $harga = $_POST['harga'];
            $sql = "INSERT INTO tblbuah (buah,deskripsi,harga) VALUES ('$buah','$deskripsi',$harga)";
            $koneksi->query($sql);
        }
        
    }

    

    $sql = 'SELECT * FROM tblbuah';

    // echo $sql;

    $hasil = $koneksi->query($sql);
    
    // print_r($hasil);

    // echo $hasil->num_rows;

    echo '<table border>';
    echo '<tr> 
            <th> ID buah</th> 
            <th> Buah </th> 
            <th> Deskripsi </th> 
            <th> Harga </th>
            <th> Gambar </th>
            <th> Hapus </th> 
            <th> Ubah </th>
        </tr>';
    

    if ($hasil->num_rows > 0) {
        while ($row = $hasil->fetch_array()) {
            echo '<tr>';
            echo '<td>'.$row[0].'</td>';
            echo '<td>'.$row[1].'</td>';
            echo '<td>'.$row[2].'</td>';
            echo '<td>'.$row[3].'</td>';
            echo '<td>'.$row[4].'</td>';
            echo '<td><a href="?id='.$row[0].'&menu=hapus"> hapus </a></td>';
            echo '<td><a href="?id='.$row[0].'&menu=edit"> edit </a></td>';
            echo '</tr>';
        }
    } else {
        echo 'Kosong';
    }
    
    
    echo '</table>';

?>