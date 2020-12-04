<?php
    include('connection.php');
    $result = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
    $encode = array();
    $encode["mahasiswa"] = array();
    if(mysqli_num_rows($result) > 0 ) {
        while($fetched = mysqli_fetch_assoc($result)){
           array_push($encode["mahasiswa"], $fetched);
        }
        echo json_encode($encode);
    } else {
        $response["message"]="tidak ada data";
        echo json_encode($response);
    }
?>