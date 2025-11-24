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
                    <h5>Tabel edit data pencapaian</h5>
                </div>
                <div class="card-body">
                    <?php
                    include '../../actions/achievement/show.php';
                    ?>
                    <form action="../../actions/achievement/update.php?id=<?= $achievement->id ?>" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="titleInput" class="form-label">Judul</label>
                            <input type="text" name="title" class="form-control" id="titleInput" placeholder="Masukan Judul...." required value="<?= $achievement->title ?>">
                        </div>

                        <div class="mb-3">
                            <label for="winnerInput" class="form-label">Pringkat</label>
                            <input type="text" name="winner" class="form-control" id="winnerInput" placeholder="Masukan pringkat...." required value="<?= $achievement->winner ?>">
                        </div>

                        <div class="mb-3">
                            <label for="personInput" class="form-label">orang</label>
                            <input type="text" name="person" class="form-control" id="personInput" placeholder="Masukan orang...." required value="<?= $achievement->person ?>">
                        </div>

                        <div class="mb-3">
                            <label for="descriptionInput" class="form-label">Deskripsi</label>
                            <input type="text" name="description" class="form-control" id="description" placeholder="Masukan deskripsi...." required value="<?= $achievement->description ?>">
                        </div>

                        <div class="mb-3">
                            <img class="w-25" src="../../../storages/achievement/<?= $achievement->image ?>" alt="">
                            <label for="imageInput" class="form-label"></label>
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