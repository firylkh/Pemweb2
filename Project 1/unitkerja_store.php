<?php
include_once('koneksi.php');

//tangkap data
$ruangan = $_POST['ruangan'];
$tenaga_medis = $_POST['tenaga_medis'];
$jam_operasional = $_POST['jam_operasional'];

//queryinsert
$query = "INSERT INTO unitkerja ( ruangan, tenaga_medis, jam_operasional) VALUES 
('$ruangan', '$tenaga_medis' , '$jam_operasional' ) ";


//eksekusi query
if ($dbh->query($query)){
    header('location: unitkerja.php');
} else {
    echo "Gagal menyimpan data";
}


?>