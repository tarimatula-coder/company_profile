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
                    <h5>Tabel detail data guru</h5>
                </div>
                <div class="card-body">
                    <?php
                    include '../../actions/testimonial/show.php';
                    ?>
                    <form>

                        <div class="mb-3">
                            <label for="nameInput" class="form-label">Nama</label>
                            <input type="text" name="name" class="form-control" id="nameInput" placeholder="Masukan nama..." value="<?= $testimonial->name ?>" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="statusInput" class="form-label">Status</label>
                            <input type="text" name="status" class="form-control" id="statusInput" placeholder="Masukan status..." value="<?= $testimonial->status ?>" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="messageInput" class="form-label">Pesan</label>
                            <textarea name="message" class="form-control" id="messageInput" placeholder="Masukan Pesan..." disabled><?= htmlspecialchars($testimonial->message ?? '') ?></textarea>
                        </div>

                        <div class="mb-3">
                            <h6>Gambar</h6>
                            <img class="w-25" src="../../../storages/testimonial/<?= $testimonial->image ?>" alt="">
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