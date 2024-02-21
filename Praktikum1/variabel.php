<?php
// membuat variabel 
$mahasiswa1 = ["Firyal Khalilah Yufasya", "Sistem Informasi", 0110123026, [3.6, 3.9, 4.0]];

// panggil variabel
echo 'Nama: '. $mahasiswa1[0] . "<br>"; // concatination 
echo "Jurusan: $mahasiswa1[1] <br>"; // string interpolation 
echo "IPK Semester 1: " . $mahasiswa1 [3] [1];
