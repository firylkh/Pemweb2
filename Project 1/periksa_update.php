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
$query = "UPDATE periksa SET tgl_periksa='$tgl_periksa', berat_badan='$berat_badan', tinggi_badan='$tinggi_badan', tensi_pasien='$tensi_pasien', ket_pasien='$ket_pasien' WHERE id_periksa ='$id'";


//eksekusi query
if ($dbh->query($query)){
    header('location: periksa.php');
} else {
    echo "Gagal menyimpan data";
}



?>