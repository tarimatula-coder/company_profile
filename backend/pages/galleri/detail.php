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
                    <h5>Tabel detail data galleri</h5>
                </div>
                <div class="card-body">
                    <?php
                    include '../../actions/galleri/show.php';
                    ?>
                    <form>

                        <div class="mb-3">
                            <label for="descriptionInput" class="form-label">deskripsi</label>
                            <textarea class="form-control" rows="5" disabled><?= $galleri->description ?>"</textarea>
                        </div>

                        <div class="mb-3">
                            <h6>Categori</h6>
                            <img class="w-25" src="../../../storages/galleri/<?= $galleri->image ?>" alt="">
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