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
                    <h5>Tabel detail data blog</h5>
                </div>
                <div class="card-body">
                    <?php
                    include '../../actions/blog/show.php';
                    ?>
                    <form>
                        <div class="mb-3">
                            <label for="titleInput" class="form-label">judul</label>
                            <input type="text" class="form-control" value="<?= $blog->title ?>" disabled>
                        </div>


                        <div class="mb-3">
                            <label for="contentInput" class="form-label">content</label>
                            <input type="text" class="form-control" value="<?= $blog->content ?>" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="dateInput" class="form-label">Tanggal</label>
                            <input type="date" name="date" class="form-control" id="nameInput" placeholder="Masukan Tanggal...." value="<?= $blog->date ?>" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="authorInput" class="form-label">penulis</label>
                            <input type="text" name="author" class="form-control" id="authorInput" value="<?= $blog->author ?>" disabled>
                        </div>

                        <div class="mb-3">
                            <h6>Gambar</h6>
                            <img class="w-25" src="../../../storages/blog/<?= $blog->image ?>" alt="">
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