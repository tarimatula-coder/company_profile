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
                    <h5>Tabel edit data testimoni</h5>
                </div>
                <div class="card-body">
                    <?php
                    include '../../actions/testimonial/show.php';
                    ?>
                    <form action="../../actions/testimonial/update.php?id=<?= $testimonial->id ?>" method="POST" enctype="multipart/form-data">

                        <div class="mb-3">
                            <label for="nameInput" class="form-label">Nama</label>
                            <input type="text" name="name" class="form-control" id="nameInput" placeholder="Masukan nama..." value="<?= $testimonial->name ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="statusInput" class="form-label">Status</label>
                            <input type="text" name="status" class="form-control" id="statusInput" placeholder="Masukan status..." value="<?= $testimonial->status ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="messageInput" class="form-label">Pesan</label>
                            <textarea name="message" class="form-control" id="messageInput" placeholder="Masukan Pesan..." required><?= htmlspecialchars($testimonial->message ?? '') ?></textarea>
                        </div>
                        
                        <div class="mb-3">
                            <img class="w-25" src="../../../storages/testimonial/<?= $testimonial->image ?>" alt="">
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