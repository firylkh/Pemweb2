<?php
$customer = $_POST['customer'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];


//array harga produk

$harga = [
    'TV' => 42000000,
    'KULKAS' => 3100000,
    'MESIN CUCI' => 3800000,
    'AC' => 1800000,
];

//hitung total harga (jumlah * produk)
$total = $jumlah * $harga[$produk];

$total = number_format($total);

echo "Nama customer : $customer";
echo "<br> produk : $produk";
echo "<br> Jumlah beli : $jumlah";
echo "<br> Total belanja : RP $total";

?>