<?php
    $koneksi = mysqli_connect("localhost","root","-3Llysa8","dsc_jogfest");
    
    // Check connection
    if (mysqli_connect_errno()){
        echo "Koneksi database gagal : " . mysqli_connect_error();
    } 
?>