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
                    include '../../actions/teacher/show.php';
                    ?>
                    <form>

                        <div class="mb-3">
                            <label for="teacher_nameInput" class="form-label">Nama</label>
                            <input type="text" class="form-control" value="<?= $teacher->teacher_name ?>" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="genderInput" class="form-label">Jenis kelamin</label>
                            <input type="text" class="form-control" value="<?= $teacher->gender ?>" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="teacher_majorInput" class="form-label">Jurusan</label>
                            <input type="text" class="form-control" value="<?= $teacher->teacher_major ?>" disabled>
                        </div>

                        <div class="mb-3">
                            <h6>Gambar</h6>
                            <img class="w-25" src="../../../storages/teacher/<?= $teacher->teacher_photo ?>" alt="">
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