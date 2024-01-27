<?php
include "warifheader.php";

?>

<?php
// ...
// Set pesan default
$pesan = '';
// Periksa status dari parameter URL
if (isset($_GET['password'])) {
    if ($_GET['password'] === 'sukses') {
        echo '
                <div class="toast-container position-fixed end-0 p-3">
                  <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header bg-success">
                     
                      <strong class="me-auto text-dark">WARIF CORPORATION</strong>
                      <small class="text-dark">Baru Saja</small>
                      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body text-success-emphasis fs-4">
                      Ganti Password Sukses
                    </div>
                  </div>
                </div>';
    } else if ($_GET['password'] === 'salah') {
        echo '<div class="toast-container position-fixed end-0 p-3">
                <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                  <div class="toast-header bg-danger">
                   
                    <strong class="me-auto text-dark">WARIF CORPORATION</strong>
                    <small class="text-dark">Baru Saja</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                  </div>
                  <div class="toast-body text-danger font-semibold fs-5">
                  Ganti Password Gagal,Password Lama Yang Anda Masukan Tidak Sesuai
                   
                  </div>
                  
                </div>
              </div>';
    }
}

?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="container mt-4 mb-5">
        <div class="row">
            <div class="col">
                <div class="card ">
                    <div class="card-header bg-warning text-dark fw-semibold fs-4">
                        Baca Dahulu
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Ganti Informasi Akun</h5>
                        <p class="card-text mb-3">Selamat datang di halaman pengaturan akun! Di sini, Anda dapat mengelola dan memperbarui informasi akun Anda sesuai kebutuhan. Kami ingin memberitahukan kepada Anda tentang suatu kebijakan keamanan yang kami terapkan untuk melindungi akun Anda.</p>
                        <h5 class="card-title">Perubahan Password:</h5>
                        <p class="card-text mb-3">Jika Anda baru saja mengganti kata sandi akun Anda, harap diingat bahwa perubahan ini akan berlaku segera. Namun, sebagai langkah keamanan tambahan, Anda tidak dapat mengganti kata sandi kembali dalam waktu 24 jam setelah perubahan terakhir. Hal ini bertujuan untuk melindungi akun Anda dari potensi tindakan yang tidak diinginkan dan memastikan keamanan yang lebih tinggi.</p>
                    </div>
                    <div class="card-footer text-warning fw-semibold ">
                        WARIF CORPORATION
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="card-header bg-info text-dark fw-semibold fs-4">
                        Ganti Password
                    </div>
                    <div class="card-body">
                        <form method="post" action="updateakun.php">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Password lama</label>
                                <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="passwordlama" required>

                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password Baru</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="passwordbaru" required>
                            </div>

                            <button type="button" class="btn btn-info" data-bs-target="#exampleModal" data-bs-toggle="modal">Ganti Password</button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Yakin Ingin Ganti Password
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-info">Ya</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>
</main>

<script>
    //mengatur toast
    document.addEventListener('DOMContentLoaded', function() {
        const toastLiveExample = new bootstrap.Toast(document.getElementById('liveToast'), {
            delay: 8000
        });
        toastLiveExample.show();
    });
</script>