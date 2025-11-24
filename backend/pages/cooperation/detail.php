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
                    <h5>Tabel detail data kerja sama</h5>
                </div>
                <div class="card-body">
                    <?php
                    include '../../actions/cooperation/show.php';
                    ?>
                    <form>
                        <div class="mb-3">
                            <h6>Gambar</h6>
                            <img class="w-25" src="../../../storages/cooperation/<?= $cooperation->image ?>" alt="">
                        </div>

                        <div class="mb-3">
                            <label for="linkInput" class="form-label">link</label>
                            <input type="text" name="link" class="form-control" id="linkInput" value="<?= $cooperation->link ?>" disabled>
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