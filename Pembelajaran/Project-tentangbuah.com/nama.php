<?php 

    require_once('db.php');

    $sql = "SELECT * FROM tblteman";

    $hasil = $koneksi->query($sql);

    if (isset($_GET['update'])) {
        $id = $_GET['update'];

        $sql = "SELECT * FROM tblteman WHERE idteman=$id";
        $result= mysqli_query($koneksi,$sql);

        $row = mysqli_fetch_array($result);


    }
?>
<form action="" method="post">
    Nama:
    
</form>
<?php
    echo '<table border>'; 
        echo '<tr>'; 
            echo '<th>ID Teman</th>';
            echo '<th>Nama</th>';
            echo '<th>Alamat</th>';
            echo '<th>Asal Sekolah</th>';
            echo '<th>Update</th>';
        echo '</tr>';

        if ($hasil->num_rows > 0) {
            while ($row = $hasil->fetch_array()) {
                echo '<tr>';
                echo '<td>'.$row[0].'</td>';
                echo '<td>'.$row[1].'</td>';
                echo '<td>'.$row[2].'</td>';
                echo '<td>'.$row[3].'</td>';
                echo '<td><a href="?update='.$row[0].'">Update</a></td>';
                echo '</tr>';
            }
        }else {
            echo 'KOSONG';
        }

    echo'</table>';

?>