<?php
    include_once ("koneksidb.php");
    $kd ="K012";
    $nb = "Kipas angin";
    $tj = "30 Maret 2022";
    $jml = "2";

    $sql = "INSERT INTO jual(KODEBARANG,NAMABARANG,TANGGALJUAL,JUMLAH) Values('$kd','$nb','$tj','$jml');";
    $hsl = mysqli_query($cnn, $sql);
    if($hsl){
        echo "insert data berhasil<br>";
    }else{
        echo "insert data gagal<br>";
    }
