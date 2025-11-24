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
                    <h5>Tabel edit data ekstrakurikuler</h5>
                </div>
                <div class="card-body">
                    <?php
                    include '../../actions/extracurricular/show.php';
                    ?>
                    <form action="../../actions/extracurricular/update.php?id=<?= $extracurricular->id ?>" method="post" enctype="multipart/form-data">

                        <div class="mb-3">
                            <label for="titleInput" class="form-label">Judul</label>
                            <input type="text" name="title" class="form-control" id="titleInput" placeholder="Masukan  judul ekstrakulikuler..." required value="<?= $extracurricular->title ?>">
                        </div>

                        <div class="mb-3">
                            <label for="descriptionInput" class="form-label">deskripsi</label>
                            <input type="text" name="description" class="form-control" id="descriptionInput" placeholder="Masukan deskripsi..." value="<?= $extracurricular->description ?>" required>
                        </div>

                        <div class="mb-3">
                            <img class="w-25" src="../../../storages/extracurricular/<?= $extracurricular->image ?>" alt="">
                            <label for="imageInput" class="form-label">pilih gambar</label>
                            <input type="file" name="image" class="form-control" id="imageInput" required>
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