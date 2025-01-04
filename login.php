<?php
require 'config.php';

function login($nip, $password)
{
    session_start();
    $sql = "SELECT * FROM pegawai WHERE nip = '$nip' AND password = '$password'";
    $result = mysqli_query($GLOBALS['connection'], $sql);
    if(mysqli_num_rows($result) > 0)
    {
        $_SESSION['nip'] = $nip;
        $_SESSION['password'] = $password;
        header('Location: home.php');
    }
    else
    {
        header("Location: formLogin.php?pesan=gagal");
    }
    return $result;
}
?>