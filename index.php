<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tubes RPL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>

  <body>

    <!-- Halaman Utama -->
    <section>

        <div class="row">

            <!-- Kiri -->
            <div class="col-lg-3" style="background-color: #563EEA;">

                <!-- Kontrol Kunci Pintu -->
                <div class="container my-5">

                    <h2 class="text-white text-center">Kontrol Kunci Pintu</h2>

                    <!-- Tombol -->
                    <div class="container row m-auto mt-3">
                        <div class="btn-group text-center" role="group">
                            <button type="button" class="btn btn-success">
                                <a href="#?" class="text-decoration-none text-white">Buka</a>
                            </button>
                            <button type="button" class="btn btn-danger">
                                <a href="#?" class="text-decoration-none text-white">Tutup</a>
                            </button>
                            <!-- <button type="button" class="btn btn-outline-light">
                                Buka
                            </button>
                            <button type="button" class="btn btn-outline-light">
                                Tutup
                            </button> -->
                        </div>
                    </div>

                </div>

                <!-- Form Aksi Otomatis -->
                <div class="row my-5">

                    <div class="container col-10 bg-light rounded-4 py-3">
                        <h4 class="text-center">Atur Aksi Otomatis</h4>
                        <form action="index.php" method="get">
                            
                            <label for=""><strong>Waktu</strong></label>
                            <select class="form-select" name="waktu">
                                <option selected value="00.00">00.00</option>
                                <option value="00.30">00.30</option>
                                <option value="01.00">01.00</option>
                            </select>
                            

                            
                            <div class="form-check mt-3">
                                <input class="form-check-input" type="radio" name="aksi" id="buka_kunci" value="Buka Kunci" checked>
                                <label class="form-check-label" for="buka_kunci">
                                    Buka Kunci
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="aksi" id="tutup_kunci" value="Tutup Kunci">
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

                <!-- Navbar -->
                <nav class="navbar border-bottom">
                    <div class="container-fluid">
                        <!-- Judul -->
                        <h1 class="text-center">Smart Door Lock</h1>
                        <!-- Log Out -->
                        <a href="#">
                            <button class="navbar-brand me-2 btn btn-link text-decoration-none">
                                <span class="">Logout</span>
                            </button>
                        </a>
                    </div>
                </nav>

                <!-- Notifikasi -->
                <div class="row my-5">
                    <div class="container rounded-4 col-lg-6 p-5" style="background-color: #563EEA;">
                        <div class="container text-center text-white">
                            <h1>Notifikasi</h1>
                            <h2>Kunci Pintu Tertutup/Terbuka</h2>
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
                                <tr>
                                    <td>22/04/2022</td>
                                    <td>15.30</td>
                                    <td>Tertutup</td>
                                </tr>
                                <tr>
                                    <td>22/04/2022</td>
                                    <td>15.00</td>
                                    <td>Terbuka</td>
                                </tr>
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
                                <tr>
                                    <td>Buka Kunci</td>
                                    <td>07.00</td>
                                    <td>
                                        <a href="#" class="text-decoration-none text-black">
                                            <img src="Assets/icons8-trash-384.png" style="width:5%">
                                            Hapus
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tutup Kunci</td>
                                    <td>20.00</td>
                                    <td>
                                        <a href="#" class="text-decoration-none text-black">
                                            <img src="Assets/icons8-trash-384.png" style="width:5%">
                                            Hapus
                                        </a>
                                    </td>
                                </tr>
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