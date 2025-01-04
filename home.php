<?php 
require 'login.php';
session_start();
if (isset($_SESSION['nip'])):
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Member</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container-sm text-center">
    <br>
    <h1 class="mt-4">Selamat datang, <strong><?php echo $_SESSION['nip']; ?></strong>!</h1>
    <br>

    <form action="logout.php" method="post">
        <button type="submit" class="btn btn-danger mt-3">Logout</button>
    </form>
</div>
</body>
</html>

<?php 
else: header("Location: formLogin.php");
endif;
?>