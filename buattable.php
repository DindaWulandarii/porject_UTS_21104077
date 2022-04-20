<?php
include_once("koneksidb.php");
$sql = "CREATE TABLE jual (
    KODEBARANG Varchar(8) PRIMARY KEY,
    NAMABARANG Varchar(50),
    TANGGALJUAL Varchar(20),
    JUMLAH INT (3)
);";
$hsl = mysqli_query($cnn,$sql);
if($hsl){
    echo "tabel sukses";
}else{
    echo "tabel gagal";
}