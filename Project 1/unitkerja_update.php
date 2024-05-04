<?php
include_once('koneksi.php');

//tangkap data

$id = $_POST['id'];
$ruangan = $_POST['ruangan'];
$tenaga_medis = $_POST['tenaga_medis'];
$jam_operasional = $_POST['jam_operasional'];


//queryinsert
$query = "UPDATE unitkerja SET ruangan='$ruangan', tenaga_medis='$tenaga_medis', jam_operasional='$jam_operasional' WHERE id_kerja ='$id'";


//eksekusi query
if ($dbh->query($query)){
    header('location: unitkerja.php');
} else {
    echo "Gagal menyimpan data";
}

?> 