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
                    <h5>Tabel edit data pengumuman</h5>
                </div>
                <div class="card-body">
                    <?php
                    include '../../actions/announcement/show.php';
                    ?>
                    <form action="../../actions/announcement/update.php?id=<?= $announcement->id ?>" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="dateInput" class="form-label">Tanggal</label>
                            <input type="date" name="date" class="form-control" id="nameInput" placeholder="Masukan Tanggal...." required value="<?= $announcement->date ?>">
                        </div>

                        <div class="mb-3">
                            <label for="authorInput" class="form-label">penulis</label>
                            <input type="text" name="author" class="form-control" id="authorInput" placeholder="Masukan Penulis...." required value="<?= $announcement->author ?>">
                        </div>

                        <div class="mb-3">
                            <label for="announcement_titleInput" class="form-label">Judul</label>
                            <input type="text" name="announcement_title" class="form-control" id="announcement_titleInput" placeholder="Masukan  judul pengumuman..." value="<?= $announcement->announcement_title ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="announcement_descriptionInput" class="form-label">Deskripsi</label>
                            <input type="text" name="announcement_description" class="form-control" id="announcement_descriptionInput" placeholder="Masukan deskripsi..." value="<?= $announcement->announcement_description ?>" required>
                        </div>

                        <div class="mb-3">
                            <img class="w-25" src="../../../storages/announcement/<?= $announcement->announcement_image ?>" alt="">
                            <label for="announcement_imageInput" class="form-label"></label>
                            <input type="file" name="announcement_image" class="form-control" id="announcement_imageInput">
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