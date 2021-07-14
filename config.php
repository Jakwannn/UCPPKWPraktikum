<?php

$koneksi = mysqli_connect("localhost", "ucp2pkw_nopaljakwan", "saintloco123", "ucp2pkw_bookdata");

if (mysqli_connect_errno()){
    echo "Koneksi database gagal : " . mysqli_connect_error();

}

?>