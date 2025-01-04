<?php
require 'login.php';

session_start();
if (!isset($_SESSION['nip'])):
?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body style="background-color:#f2f2f2">
    <div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-md-4" style="margin-top:200px">
          <div class="card">
            <div class="card-header bg-transparent mb-0">
              <h5 class="text-center"><span class="font-weight-bold text-primary">SIGN IN</span></h5>
            </div>
            <div class="card-body">
              <form method="POST">
                <?php
                  if (isset($_GET['pesan'])) {
                    if ($_GET['pesan'] == "gagal") {
                      echo " <div class='alert alert-danger d-flex align-items-center' role='alert'>
                                      <div>Login gagal! username dan password salah!</div></div>";
                    } else if ($_GET['pesan'] == "logout") {
                      echo "<div class='alert alert-danger d-flex align-items-center' role='alert'>
                                      <div>Anda telah berhasil logout</div></div>";
                    }
                  }
                ?>
                <div class="input-group mb-3">
                  <span class="input-group-text" id="addon-wrapping"></span>
                  <input type="text" id="nip" name="nip" class="form-control" placeholder="NIP" aria-label="NIP" aria-describedby="addon-wrapping">
                </div>
                <div class="input-group mb-3">
                  <span class="input-group-text" id="addon-wrapping"></span>
                  <input type="password" id="password" name="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="addon-wrapping">
                </div>
                <div class="form-group">
                  <input type="submit" name="login" value="Login" class="btn btn-primary btn-block">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>

  </html>

<?php
else:
  header("Location: home.php");
endif;
?>

<?php
if (isset($_POST['login'])) {
  session_start();
  login($_POST['nip'], ($_POST['password']));
  header("Location: home.php");
}
?>