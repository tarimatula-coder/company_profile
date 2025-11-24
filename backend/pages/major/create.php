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
                    <h5>Tambah data jurusan</h5>
                </div>
                <div class="card-body">
                    <form action="../../actions/major/store.php" method="POST" enctype="multipart/form-data">

                        <div class="mb-3">
                            <label for="major_nameInput" class="form-label">Judul</label>
                            <input type="text" name="major_name" class="form-control" id="major_nameInput" placeholder="Masukan Judul..." required>
                        </div>

                        <div class="mb-3">
                            <label for="major_descriptionInput" class="form-label">deskripsi</label>
                            <input type="text" name="major_description" class="form-control" id="major_descriptionInput" placeholder="Masukan deskripsi..." required>
                        </div>

                        <div class="mb-3">
                            <label for="headInput" class="form-label">Kepala</label>
                            <input type="text" name="head" class="form-control" id="headInput" placeholder="Masukan Kepala..." required>
                        </div>

                        <div class="mb-3">
                            <label for="major_imageInput" class="form-label">pilih gambar</label>
                            <input type="file" name="major_image" class="form-control" id="major_imageInput" required>
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