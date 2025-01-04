<?php
    $host = 'localhost';
    $host_name = 'root';
    $pass = '';
    $db = 'login';

    $connection = mysqli_connect($host, $host_name, $pass, $db);
    if($connection->connect_errno > 0)
        echo "Koneksi gagal: " .mysqli_connect_error();

?>