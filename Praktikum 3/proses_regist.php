<?php

//nilai registrasi
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$gender = $_POST['gender'];
$prodi = $_POST['prodi'];
$skills = $_POST['skill'];
$domisili = $_POST['domisili'];
$email = $_POST['email'];


$skills = [
    'html' => 10,
    'css' => 10,
    'javascript' => 20,
    'rwd boostrap' => 20,
    'php' => 30,
    'python' => 30,
    'java' => 50,   
    ];

//menghitung skor skills
$total_skor = 0;
foreach ($skills as $value){
    $total_skor += $nilai_skill[$value];
}

//mencari kategori skill berdasarkan skor
$kategori_skill = '';
if ($total_skor == 0) {
    $kategori_skill = 'Tidak memadai';
}
else if ($total_skor <= 40){
    $kategori_skill = 'Kurang';
}
else if ($total_skor <= 60){
    $kategori_skill = 'Cukup';
}
else if ($total_skor <= 100){
    $kategori_skill = 'Baik';
}
else if ($total_skor <= 170){
    $kategori_skill = 'Sangat Baik';
}

echo "NIM:  $nim";
echo "<br>Nama Lengkap:  $nama";
echo "<br>Gender:  $gender";
echo "<br>Prodi: $prodi";
echo "<br>Skill:  $skill" . join(',', $skills);
echo "<br>Domisili: $domisi";
echo "<br>Email: $email";
