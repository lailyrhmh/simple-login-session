<?php 
session_start();
if (isset($_SESSION['nip']))
    {
        header("Location: formLogin.php");
    }
else
    {
        header("Location: home.php");
    }

?>