<?php
include_once('koneksi.php');

//tangkap data
$id = $_POST['id'];
$tgl_periksa = $_POST['tgl_periksa'];
$berat_badan = $_POST['berat_badan'];
$tinggi_badan = $_POST['tinggi_badan'];
$tensi_pasien = $_POST['tensi_pasien'];
$ket_pasien = $_POST['ket_pasien'];

//queryinsert
$query = "INSERT INTO periksa (tgl_periksa, berat_badan, tinggi_badan, tensi_pasien, ket_pasien ) VALUES 
('$tgl_periksa', '$berat_badan', '$tinggi_badan' , '$tensi_pasien' , '$ket_pasien' ) ";


//eksekusi query
if ($dbh->query($query)){
    header('location: periksa.php');
} else {
    echo "Gagal menyimpan data";
}


?>