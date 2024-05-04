<?php
include_once('koneksi.php');

//tangkap data dari url

$id = $_GET['id'];



//queryinsert
$query = "DELETE FROM unitkerja WHERE id_kerja ='$id'";


//eksekusi query
if ($dbh->query($query)){
    header('location: unitkerja.php');
} else {
    echo "Gagal menyimpan data";
}



?>