<?php
    
    include_once("koneksidb.php");
    $kb = "K010";
    $sql = "DELETE FROM jual WHERE KODEBARANG='$kb';";

    $hsl = mysqli_query($cnn, $sql);

    if($hsl){
        echo "Penghapusan data sukses<br>";
    }else{
        echo "Penghapusan data gagal";
    }