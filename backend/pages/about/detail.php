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
                    <h5>Tabel detail data about</h5>
                </div>
                <div class="card-body">
                    <?php
                    include '../../actions/about/show.php';
                    ?>
                    <form>
                        <div class="mb-3">
                            <label for="school_nameInput" class="form-label">Nama</label>
                            <input type="text" name="school_name" class="form-control" id="school_nameInput" value="<?= $about->school_name ?>" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="school_taglineInput" class="form-label">slogan</label>
                            <input type="text" name="school_tagline" class="form-control" id="school_taglineInput" value="<?= $about->school_tagline ?>" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="sinceInput" class="form-label">Sejak</label>
                            <input type="date" name="since" class="form-control" id="sinceInput" value="<?= $about->since ?>" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="alamatInput" class="form-label">Alamat</label>
                            <textarea class="form-control" rows="5" disabled><?= $about->alamat ?>"</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="school_descriptionInput" class="form-label">Deskripsi</label>
                            <input type="text" name="school_description" class="form-control" id="school_descriptionInput" placeholder="Masukan Deskripsi...." value="<?= $about->school_description ?>" disabled>
                        </div>

                        <div class="mb-3">
                            <h6>Gambar</h6>
                            <img class="w-25" src="../../../storages/about/<?= $about->school_banner ?>" alt="">
                        </div>

                        <div class="mb-3">
                            <h6>Gambar</h6>
                            <img class="w-25" src="../../../storages/about/<?= $about->school_logo ?>" alt="">
                        </div>

                        <a href="./index.php" class="btn btn-primary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include '../../partials/footer.php';
include '../../partials/script.php';
?>