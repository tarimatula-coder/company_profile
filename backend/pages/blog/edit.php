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
                    <h5>Tabel edit data blog</h5>
                </div>
                <div class="card-body">
                    <?php
                    include '../../actions/blog/show.php';
                    ?>
                    <form action="../../actions/blog/update.php?id=<?= $blog->id ?>" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="titleInput" class="form-label">Judul</label>
                            <input type="text" name="title" class="form-control" id="titleInput" placeholder="Masukan Judul..." value="<?= $blog->title ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="contentInput" class="form-label">content</label>
                            <input type="text" name="content" class="form-control" id="contentInput" placeholder="Masukan content..." value="<?= $blog->content ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="dateInput" class="form-label">Tanggal</label>
                            <input type="date" name="date" class="form-control" id="nameInput" placeholder="Masukan Tanggal...." required value="<?= $blog->date ?>">
                        </div>

                        <div class="mb-3">
                            <label for="authorInput" class="form-label">penulis</label>
                            <input type="text" name="author" class="form-control" id="authorInput" required value="<?= $blog->author ?>">
                        </div>

                        <div class="mb-3">
                            <img class="w-25" src="../../../storages/blog/<?= $blog->image ?>" alt="">
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