<?php
//Menghitung luas segitiga
function luas_segitiga($alas, $tinggi)
{
    $luas = 0.5 * $alas * $tinggi;
    echo $luas; 
}

//pemangggilan function
luas_segitiga(2, 10);