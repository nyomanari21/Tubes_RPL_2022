<?php

session_start(); // mulai session

// cek session untuk memeriksa user telah login atau belum
if(isset($_SESSION['username'])){ // jika ada session username
    header("location: ../index.php"); //redirect ke halaman index.php
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>

  <body>

    <!-- Form Log In -->
    <section>
        <div class="row">
            <div class="container col-lg-4 col-md-8 col-sm-10 rounded-4 my-5 p-5" style="background-color: #563EEA;">
                <h1 class="text-center text-white">Welcome!</h1>

                <div class="text-center" style="color: red;">
                    <?php
                        // cek apakah terdapat cookie dengan nama message
                        if(isset($_COOKIE['message'])){ //jika ada
                            echo $_COOKIE['message']; //tampilkan pesannya
                        }
                    ?>
                </div>
    
                <!-- Form login -->
                <div class="d-flex justify-content-center text-white">
                    <div class="col-md-10 col-lg-10 col-xl-10 col-sm-12">
                        <form class="container mt-5" method="post" action="kontrol_login.php">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" name="username" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <button type="submit" name="login" class="btn btn-outline-light d-grid gap-2 col-lg-4 col-md-4 col-sm-4 mx-auto">
                                Login
                            </button>
                        </form>
                    </div>
                </div>
    
            </div>
        </div>
    </section>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>