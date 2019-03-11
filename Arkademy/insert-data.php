<?php
    include "koneksi.php";

    $sql = "INSERT INTO user
    (
        id,
        nama,
        role,
        availability,
        age,
        location,
        years_experience,
        email
    )VALUE
    (
        '1',
        'Imelda Zahwa Aracella',
        'Frontend Developer',
        'Full Time',
        '16',
        'Malang',
        '0',
        'imelda@gmail.com'
    )";

    if($koneksi->query($sql) == TRUE){
        echo "Insert data telah berhasil";
    } else {
        echo "Insert data gagal";
    }
?>
    
    
   