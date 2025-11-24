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
                    <h5>Tabel data kontak</h5>
                </div>
                <div class="card-body">
                    <?php
                    include '../../actions/contact/show.php';
                    ?>
                    <form action="../../actions/contact/update.php?id=<?= $contact->id ?>" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="contactInput" class="form-label">Kontak</label>
                            <input type="text" name="contact" class="form-control" id="contactInput" placeholder="Masukan contact..." required value="<?= $contact->contact ?>">
                        </div>
                        
                        <div class="mb-3">
                            <label for="linkInput" class="form-label">Link</label>
                            <input type="text" name="link" class="form-control" id="linkInput" placeholder="Masukan link..." required value="<?= $contact->link ?>">
                        </div>

                        <div class="mb-3">
                            <img class="w-25" src="../../../storages/contact/<?= $contact->img ?>" alt="">
                            <label for="imgInput" class="form-label"></label>
                            <input type="file" name="img" class="form-control" id="imgInput" required>
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