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
                    <h5>Tabel detail data Pengumuman</h5>
                </div>
                <div class="card-body">
                    <?php
                    include '../../actions/announcement/show.php';
                    ?>
                    <form>
                        <div class="mb-3">
                            <label for="dateInput" class="form-label">Tanggal</label>
                            <input type="date" name="date" class="form-control" id="nameInput" placeholder="Masukan Tanggal...." disabled value="<?= $announcement->date ?>">
                        </div>

                        <div class="mb-3">
                            <label for="authorInput" class="form-label">penulis</label>
                            <input type="text" name="author" class="form-control" id="authorInput" disabled value="<?= $announcement->author ?>">
                        </div>

                        <div class="mb-3">
                            <label for="announcement_titleInput" class="form-label">judul</label>
                            <input type="text" class="form-control" value="<?= $announcement->announcement_title ?>" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="announcement_descriptionInput" class="form-label">deskripsi</label>
                            <textarea class="form-control" rows="5" disabled><?= $announcement->announcement_description ?>"</textarea>
                        </div>

                        <div class="mb-3">
                            <h6>Gambar</h6>
                            <img class="w-25" src="../../../storages/announcement/<?= $announcement->announcement_image ?>" alt="">
                        </div>


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