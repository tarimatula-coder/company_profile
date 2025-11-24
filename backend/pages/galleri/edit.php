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
                    <h5>Tabel edit data Galleri</h5>
                </div>
                <div class="card-body">
                    <?php
                    include '../../actions/galleri/show.php';
                    ?>
                    <form action="../../actions/galleri/update.php?id=<?= $galleri->id ?>" method="POST" enctype="multipart/form-data">

                        <div class="mb-3">
                            <label for="descriptionInput" class="form-label">Deskripsi</label>
                            <input type="text" name="description" class="form-control" id="description" placeholder="Masukan deskripsi...." value="<?= $galleri->description ?>" required>
                        </div>


                        <div class="mb-3">
                            <img class="w-25" src="../../../storages/galleri/<?= $galleri->image ?>" alt="">
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