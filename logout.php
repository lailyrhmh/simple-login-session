<?php
    session_start();
    session_destroy();

    header("Location: formLogin.php?pesan=logout");
?>