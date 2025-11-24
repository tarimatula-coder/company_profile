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
                    <h5>Tambah data Kepala sekolah</h5>
                </div>
                <div class="card-body">
                    <form action="../../actions/headmaster/store.php" method="POST" enctype="multipart/form-data">

                        <div class="mb-3">
                            <label for="headmaster_nameInput" class="form-label">Nama</label>
                            <input type="text" name="headmaster_name" class="form-control" id="headmaster_nameInput" placeholder="Masukan nama kepala sekolah..." required>
                        </div>

                        <div class="mb-3">
                            <label for="headmaster_descriptionInput" class="form-label">Deskripsi</label>
                            <input type="text" name="headmaster_description" class="form-control" id="headmaster_descriptionInput" placeholder="Masukan deskripsi..." required>
                        </div>

                        <div class="mb-3">
                            <label for="headmaster_photoInput" class="form-label">pilih gambar</label>
                            <input type="file" name="headmaster_photo" class="form-control" id="headmaster_photoInput" required>
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