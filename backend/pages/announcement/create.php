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
                    <form action="../../actions/announcement/store.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="dateInput" class="form-label">Tanggal di buat</label>
                            <input type="date" name="date" class="form-control" id="dateInput" placeholder="Masukan tanggal di buat...." required>
                        </div>

                        <div class="mb-3">
                            <label for="authorInput" class="form-label">penulis</label>
                            <input type="author" name="author" class="form-control" id="authorInput" placeholder="Masukan penulis...." required>
                        </div>

                        <div class="mb-3">
                            <label for="announcement_titleInput" class="form-label">Judul</label>
                            <input type="text" name="announcement_title" class="form-control" id="announcement_titleInput" placeholder="Masukan judul..." required>
                        </div>

                        <div class="mb-3">
                            <label for="announcement_descriptionInput" class="form-label">deskripsi</label>
                            <input type="text" name="announcement_description" class="form-control" id="announcement_descriptionInput" placeholder="Masukan deskripsi..." required>
                        </div>

                        <div class="mb-3">
                            <label for="announcement_imageInput" class="form-label">pilih gambar</label>
                            <input type="file" name="announcement_image" class="form-control" id="announcement_imageInput" required>
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