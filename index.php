<?php

session_start(); // mulai sessionnya
include("Log/log_kunci_pintu.php");
include("Log/log_aksi_otomatis.php");

// cek session untuk memeriksa user telah login atau belum
if(!isset($_SESSION['username'])){ // jika tidak ada session username
    header("location: Login/login.php"); // kita redirect ke halaman index.php
}

// ambil data log kunci pintu
$log_kunci_pintu = show_log_kunci_pintu();

// ambil data log aksi otomatis
$log_aksi_otomatis = show_log_aksi_otomatis();

// proses cek aksi otomatis

// catat waktu saat halaman direfresh
date_default_timezone_set('Asia/Jakarta');
$time = date('H:i');

// cek, jika sudah pernah melakukan aksi otomatis
if(isset($_GET['time'])){
    // cek apakah waktu sekarang sama dengan waktu aksi otomatis, jika tidak, lakukan aksi otomatis
    if($time != $_GET['time']){
        foreach($log_aksi_otomatis as $cek){
            if($time == $cek['waktu']){
                // jika nama aksi Buka Kunci
                if($cek['nama_aksi'] == "Buka Kunci"){
                    echo"<meta http-equiv='refresh' content='0;URL=Kunci/kontrol_kunci.php?buka&username={$_SESSION['username']}&status={$log_kunci_pintu[0]['status']}' />";
                }
                // jika nama aksi Tutup Kunci
                else if($cek['nama_aksi'] == "Tutup Kunci"){
                    echo"<meta http-equiv='refresh' content='0;URL=Kunci/kontrol_kunci.php?tutup&username={$_SESSION['username']}&status={$log_kunci_pintu[0]['status']}' />";
                }
            }
        }
    }
}
// jika belum
else{
    // cek apakah waktu sekarang sama dengan waktu aksi otomatis, jika tidak, lakukan aksi otomatis
        foreach($log_aksi_otomatis as $cek){
            if($time == $cek['waktu']){
                // jika nama aksi Buka Kunci
                if($cek['nama_aksi'] == "Buka Kunci"){
                    echo"<meta http-equiv='refresh' content='0;URL=Kunci/kontrol_kunci.php?buka&username={$_SESSION['username']}&status={$log_kunci_pintu[0]['status']}' />";
                }
                // jika nama aksi Tutup Kunci
                else if($cek['nama_aksi'] == "Tutup Kunci"){
                    echo"<meta http-equiv='refresh' content='0;URL=Kunci/kontrol_kunci.php?tutup&username={$_SESSION['username']}&status={$log_kunci_pintu[0]['status']}' />";
                }
            }
        }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- meta refresh yang merefresh halaman ini tiap 1 menit untuk periksa waktu -->
    <meta http-equiv='refresh' content='60;URL=index.php' />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Smart Door Lock</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>

  <body>

  <!-- Navbar -->
    <nav class="navbar border-bottom">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><h2>Smart Door Lock</h2></a>
            
            <a href="Login/logout.php">
                <button class="navbar-brand me-2 btn btn-link text-decoration-none">
                    <span class="">Logout</span>
                </button>
            </a>
        </div>
    </nav>

    <!-- Halaman Utama -->
    <section>

        <div class="row">

            <!-- Kiri -->
            <div class="col-lg-3" style="background-color: #563EEA;">

                <!-- Kontrol Kunci Pintu -->
                <div class="container my-5">

                    <h2 class="text-white text-center">Kontrol Kunci Pintu</h2>

                    <!-- Tombol -->
                    <form class="form" action="Kunci/kontrol_kunci.php" method="get">
                        <!-- simpan username akun yang login -->
                        <input type="hidden" name="username" value="<?php echo $_SESSION['username'] ?>">
                        <input type="hidden" name="status" value="<?php echo $log_kunci_pintu[0]['status'] ?>">

                        <div class="row">
                            <div class="btn-group text-center" role="group">
                                <!-- Kontrol tombol -->
                                <?php
                                    // jika status kunci terbaru yaitu terbuka, disable tombol buka
                                    if($log_kunci_pintu[0]['status'] == "Terbuka"){
                                        echo "<button type='submit' name='buka' class='btn btn-success' disabled>Buka</button>
                                            <button type='submit' name='tutup' class='btn btn-danger'>Tutup</button>";
                                    }
                                    // jika status kunci terbaru yaitu tertutup, disable tombol tutup
                                    else{
                                        echo "<button type='submit' name='buka' class='btn btn-success'>Buka</button>
                                            <button type='submit' name='tutup' class='btn btn-danger' disabled>Tutup</button>";
                                    }
                                ?>
                            </div>
                        </div>
                    </form>

                </div>

                <!-- Form Aksi Otomatis -->
                <div class="row my-5">

                    <div class="container col-10 bg-light rounded-4 py-3">
                        <h4 class="text-center">Atur Aksi Otomatis</h4>
                        <form action="Kunci/aksi_otomatis.php" method="get">
                            
                            <label for="waktu" class="form-label mt-3 me-2"><strong>Waktu: </strong></label>
                            <input type="time" name="waktu" min="00:00" max="23:59" required>                            
                            
                            <div class="form-check mt-3">
                                <input class="form-check-input" type="radio" name="aksi" id="buka_kunci" value="1" checked>
                                <label class="form-check-label" for="buka_kunci">
                                    Buka Kunci
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="aksi" id="tutup_kunci" value="2">
                                <label class="form-check-label" for="tutup_kunci">
                                    Tutup Kunci
                                </label>
                            </div>

                            <button type="submit" name="tambah" class="btn btn-success d-grid gap-2 col-lg-4 col-md-4 col-sm-4 mx-auto mt-4">
                                Tambah
                            </button>
                        </form>
                    </div>

                </div> 
                
            </div>

            <!-- Kanan -->
            <div class="col-lg-9">

                <!-- Judul -->
                <div class="container my-5">
                    <h1 class="text-center">Selamat Datang <?php echo $_SESSION['nama']; ?>!</h1>
                </div>

                <!-- Notifikasi -->
                <div class="row my-5">
                    <div class="container rounded-4 col-lg-6 p-5" style="background-color: #563EEA;">
                        <div class="container text-center text-white">
                            <h1>Status:</h1>
                            <h2>Kunci Pintu <?php echo $log_kunci_pintu[0]['status'] ?></h2>
                        </div>
                    </div>
                </div>

                <!-- Tabel Log Kunci Pintu -->
                <div class="row my-5">
                    <div class="container col-lg-10">
                        <h2>Log Kunci Pintu</h2>
                        <table class="table table-striped table-bordered table-hover text-center">
                            <thead style="background-color: #563EEA; color: white;">
                                <tr>
                                    <th scope="col" style="width:33%">Tanggal</th>
                                    <th scope="col" style="width:33%">Waktu</th>
                                    <th scope="col" style="width:33%">Status Kunci</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($log_kunci_pintu as $row){
                                        echo "<tr>
                                                <td>{$row['tanggal']}</td>
                                                <td>{$row['waktu']}</td>
                                                <td>{$row['status']}</td>
                                            </tr>";
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Tabel Log Aksi Otomatis -->
                <div class="row my-5">
                    <div class="container col-lg-10">
                        <h2>Log Aksi Otomatis</h2>
                        <table class="table table-striped table-bordered table-hover text-center">
                            <thead style="background-color: #563EEA; color: white;">
                                <tr>
                                    <th scope="col" style="width:33%">Waktu</th>
                                    <th scope="col" style="width:33%">Aksi</th>
                                    <th scope="col" style="width:33%">Pengaturan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($log_aksi_otomatis as $row){
                                        echo "<tr>
                                                <td>{$row['waktu']}</td>
                                                <td>{$row['nama_aksi']}</td>
                                                <td>
                                                    <a href='Kunci/aksi_otomatis.php?id_hapus={$row['id_log_aksi']}' class='text-decoration-none text-black'>
                                                        <img src='Assets/icons8-trash-384.png' style='width:5%'>
                                                        Hapus
                                                    </a>
                                                </td>
                                            </tr>";
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </div>

    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>