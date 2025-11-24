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
                    <h5>Tabel edit data Kelapa sekolah</h5>
                </div>
                <div class="card-body">
                    <?php
                    include '../../actions/headmaster/show.php';
                    ?>
                    <form action="../../actions/headmaster/update.php?id=<?= $headmaster->id ?>" method="POST" enctype="multipart/form-data">

                        <div class="mb-3">
                            <label for="headmaster_nameInput" class="form-label">Nama</label>
                            <input type="text" name="headmaster_name" class="form-control" id="headmaster_nameInput" placeholder="Masukan Judul..." value="<?= $headmaster->headmaster_name ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="headmaster_descriptionInput" class="form-label">Deskripsi</label>
                            <input type="text" name="headmaster_description" class="form-control" id="headmaster_descriptionInput" placeholder="Masukan deskripsi..." value="<?= $headmaster->headmaster_description ?>" required>
                        </div>
                        <div class="mb-3">
                            <img class="w-25" src="../../../storages/headmaster/<?= $headmaster->headmaster_photo ?>" alt="">
                            <label for="headmaster_photoInput" class="form-label">pilih gambar</label>
                            <input type="file" name="headmaster_photo" class="form-control" id="headmaster_photoInput" required>
                        </div>

                        <button type="submit" class="btn btn-success" name="tombol">Simpan</button>
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