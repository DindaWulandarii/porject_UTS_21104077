<?php

    include_once("koneksidb.php");
    $kb= "K30";
    $jml = "4";
    $sql = "UPDATE jual SET KODEBARANG='$kb' WHERE jumlah='$jml';";

    $hsl = mysqli_query($cnn, $sql);

    if($hsl){
        echo "Update data sukses<br>";
    }else{
        echo "Update data gagal";
    }