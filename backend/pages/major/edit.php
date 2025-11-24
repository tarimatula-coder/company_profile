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
                    <h5>Tabel edit data jurusan</h5>
                </div>
                <div class="card-body">
                    <?php
                    include '../../actions/major/show.php';
                    ?>
                    <form action="../../actions/major/update.php?id=<?= $major->id ?>" method="POST" enctype="multipart/form-data">

                        <div class="mb-3">
                            <label for="major_nameInput" class="form-label">Judul</label>
                            <input type="text" name="major_name" class="form-control" id="major_nameInput" placeholder="Masukan Judul..." value="<?= $major->major_name ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="major_descriptionInput" class="form-label">deskripsi</label>
                            <input type="text" name="major_description" class="form-control" id="major_descriptionInput" placeholder="Masukan deskripsi..." value="<?= $major->major_description ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="headInput" class="form-label">Kepala</label>
                            <input type="text" name="head" class="form-control" id="headInput" placeholder="Masukan Kepala..." value="<?= $major->head ?>" required>
                        </div>

                        <div class="mb-3">
                            <img class="w-25" src="../../../storages/major/<?= $major->major_image ?>" alt="">
                            <label for="major_imageInput" class="form-label"></label>
                            <input type="file" name="major_image" class="form-control" id="major_imageInput" required>
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