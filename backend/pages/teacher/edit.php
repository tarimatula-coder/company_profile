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
                    <h5>Tabel edit data guru</h5>
                </div>
                <div class="card-body">
                    <?php
                    include '../../actions/teacher/show.php';
                    ?>
                    <form action="../../actions/teacher/update.php?id=<?= $teacher->id ?>" method="POST" enctype="multipart/form-data">

                        <div class="mb-3">
                            <label for="teacher_nameInput" class="form-label">Nama guru</label>
                            <input type="text" name="teacher_name" class="form-control" id="teacher_nameInput" placeholder="Masukan nama guru..." value="<?= $teacher->teacher_name ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="genderInput" class="form-label">Jenis kelamin</label>
                            <input type="text" name="gender" class="form-control" id="genderInput" placeholder="Masukan jenis kelamin..." value="<?= $teacher->gender ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="teacher_majorInput" class="form-label">Jurusan guru</label>
                            <input type="text" name="teacher_major" class="form-control" id="teacher_majorInput" placeholder="Masukan jurusan guru..." value="<?= $teacher->teacher_major ?>" required>
                        </div>

                        <div class="mb-3">
                            <img class="w-25" src="../../../storages/teacher/<?= $teacher->teacher_photo ?>" alt="">
                            <label for="teacher_photoInput" class="form-label">pilih gambar</label>
                            <input type="file" name="teacher_photo" class="form-control" id="teacher_photoInput" required>
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