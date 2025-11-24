<?php
include '../../partials/header.php';
include '../../partials/sidebar.php';
include '../../partials/navbar.php';
?>


<!-- content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5>Tambah data kontak</h5>
                </div>
                <div class="card-body">
                    <form action="../../actions/contact/store.php" method="POST" enctype="multipart/form-data">

                        <div class="mb-3">
                            <label for="contactInput" class="form-label">Kontak</label>
                            <input type="text" name="contact" class="form-control" id="contactInput" placeholder="Masukan Judul..." required>
                        </div>

                        <div class="mb-3">
                            <label for="linkInput" class="form-label">Link</label>
                            <input type="text" name="link" class="form-control" id="linkInput" placeholder="Masukan link..." required>
                        </div>

                        <div class="mb-3">
                            <label for="imgInput" class="form-label">pilih gambar</label>
                            <input type="file" name="img" class="form-control" id="imgInput" required>
                        </div>

                        <button type="submit" class="btn btn-success" name="tombol">Tambah</button>
                        <a href="./index.php" class="btn btn-primary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php
include '../../partials/footer.php';
include '../../partials/script.php';
?>