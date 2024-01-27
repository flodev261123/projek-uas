<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="../kelompok/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .gradient-custom-2 {
      /* fallback for old browsers */
      background: #808080;
      /* Warna abu-abu yang diinginkan */

      /* Fallback jika warna abu-abu di atas tidak didukung */
      background: linear-gradient(to right, #808080, #808080);

    }

    @media (min-width: 10px) {
      .gradient-form {
        height: 50vh;
      }
    }

    @media (min-width: 10px) {
      .gradient-custom-2 {
        border-top-right-radius: .3rem;
        border-bottom-right-radius: .3rem;
      }
    }
  </style>
</head>
<?php
if (isset($_GET['status'])) {
        if ($_GET['status'] === 'sukses') {
            echo '
                <div class="toast-container position-fixed end-0 p-3">
                  <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header bg-info">
                     
                      <strong class="me-auto text-dark">WARIF CORPORATION</strong>
                      <small class="text-dark">Baru Saja</small>
                      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                      Hallo, Akun Berhasil Di Buat Kini Anda Bisa Login Untuk Akses
                     
                    </div>
                    
                  </div>
                </div>';
              }
            }
            ?> 
              

<body class="bg-dark">
  <section class="gradient-form" style="background-color: #eee;">

    <div class="container justify-content-center align-content-center  d-flex ">

      <?php
      if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagallogin") {
          echo '<div class="alert alert-danger position-absolute z-3 mt-3 " role="alert" >
                      password atau username tidak sesuai
                    </div>';
        } else if ($_GET['pesan'] == "logout") {
          echo '<div class="alert alert-success position-absolute z-3 mt-3 " role="alert" >
                  Telah Log Out, Aktivitas Telah Terekam Sistem
                </div>';
        }
      }
      ?>
      <div class="row d-flex ">
        <div class="col-xl-10  position-absolute top-50 start-50 translate-middle">
          <div class="card rounded-3 text-black mt-4">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">
                  <div class="text-center">
                    <h4 class="mt-1 mb-4 ">Warif Corporation Login Form</h4>
                  </div>
                  <form method="post" action="aksilogin.php">
                    <p>Silahkan Login Terlebih Dahulu</p>

                    <div class="form-outline mb-4">
                      <input type="text" name="username" class="form-control" placeholder="masukan username" required />
                      <label class="form-label" for="form2Example11">Username</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="password" name="password" class="form-control" required />
                      <label class="form-label" for="form2Example22">Password</label>
                    </div>

                    <div class="text-center pt-1 d-grid pb-1">
                      <button class="btn btn-info  btn-block fa-lg mb-3" type="submit">Log
                        in</button>
                      <button type="button" class="btn btn-warning" onclick="window.location='register.php'">Buat Baru</button>
                    </div>
                  </form>

                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <h4 class="mb-4">Guide</h4>
                  <p class="small mb-4">Jika Belum Memiliki Akun Maka Sialahkan Register, Pembuatan Akun Secara Bersamaan Juga Membuat Data Saldo Untuk Di Gunakan Dalam Aplikasi.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>

  <script src="../kelompok/js/bootstrap.min.js"></script>
</body>

</html>

<script>
   //mengatur toast
   document.addEventListener('DOMContentLoaded', function() {
        const toastLiveExample = new bootstrap.Toast(document.getElementById('liveToast'), {
            delay: 6000
        });
        toastLiveExample.show();
    });
</script>