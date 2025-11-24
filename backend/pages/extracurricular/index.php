<?php
include '../../partials/header.php';
include '../../partials/sidebar.php';
include '../../partials/navbar.php';

$qextracurricular = "SELECT * FROM extracurriculars";
$result = mysqli_query($connect, $qextracurricular) or die(mysqli_error($connect));
?>

<!-- content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5>Tabel Ekstrakurikuler</h5>
                    <a href="./create.php" class="btn btn-primary">Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="text-center" id="datatable" class="table table-striped table-hover align-middle">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Gambar</th>
                                    <th class="text-center">Judul</th>
                                    <th class="text-center">Deskripsi</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $maxLength = 100; // batas karakter deskripsi
                                while ($item = $result->fetch_object()):
                                    // limit deskripsi
                                    $description = $item->description;
                                    if (strlen($description) > $maxLength) {
                                        $description = substr($description, 0, $maxLength) . '...';
                                    }
                                ?>
                                    <tr>
                                        <td class="text-center"><?= $no ?></td>
                                        <td class="text-center">
                                            <img src="../../../storages/extracurricular/<?= $item->image ?>" alt="Gambar" width="100" height="100">
                                        </td>
                                        <td class="text-center"><?= $item->title ?></td>
                                        <td class="text-center" style="max-width: 150px; white-space: normal; word-wrap: break-word;">
                                            <?= $description ?>
                                        </td>

                                        <td>
                                            <a href="./detail.php?id=<?= $item->id ?>" class="btn btn-success rounded-circle p-2" title="Detail">
                                                <i class='ti ti-eye'></i>
                                            </a>
                                            <a href="./edit.php?id=<?= $item->id ?>" class="btn btn-warning rounded-circle p-2" title="Edit">
                                                <i class='ti ti-edit'></i>
                                            </a>
                                            <a href="../../actions/extracurricular/destroy.php?id=<?= $item->id ?>" class="btn btn-danger rounded-circle p-2" onclick="return confirm('Apakah anda yakin?')" title="Hapus">
                                                <i class="ti ti-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php
                                    $no++;
                                endwhile;
                                ?>
                            </tbody>
                        </table>
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