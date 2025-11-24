<?php
include '../../partials/header.php';
include '../../partials/sidebar.php';
include '../../partials/navbar.php';

$qMajors = "SELECT * FROM majors";
$result = mysqli_query($connect, $qMajors) or die(mysqli_error($connect));
?>

<!-- content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5>Tabel Jurusan</h5>
                    <a href="./create.php" class="btn btn-primary">Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-hover align-middle">
                            <thead class="text-center">
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama Jurusan</th>
                                    <th class="text-center">Deskripsi Jurusan</th>
                                    <th class="text-center">Kepala Jurusan</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $maxLength = 50; // batas karakter deskripsi
                                while ($item = $result->fetch_object()):
                                    // batasi deskripsi
                                    $description = $item->major_description;
                                    if (strlen($description) > $maxLength) {
                                        $description = substr($description, 0, $maxLength) . '...';
                                    }
                                ?>
                                    <tr>
                                        <td class="text-center"><?= $no ?></td>
                                        <td class="text-center"><?= $item->major_name ?></td>
                                        <td class="text-center" style="max-width:300px; overflow:hidden; display:-webkit-box; -webkit-box-orient:vertical;">
                                            <?= $description ?>
                                        </td>
                                        <td class="text-center"><?= $item->head ?></td>
                                        <td class="text-center">
                                            <div class="d-flex justify-content-center gap-2">
                                                <a href="./detail.php?id=<?= $item->id ?>" class="btn btn-success rounded-circle p-2" title="Detail">
                                                    <i class='ti ti-eye'></i>
                                                </a>
                                                <a href="./edit.php?id=<?= $item->id ?>" class="btn btn-warning rounded-circle p-2" title="Edit">
                                                    <i class='ti ti-edit'></i>
                                                </a>
                                                <a href="../../actions/major/destroy.php?id=<?= $item->id ?>" class="btn btn-danger rounded-circle p-2" onclick="return confirm('Apakah anda yakin?')" title="Hapus">
                                                    <i class="ti ti-trash"></i>
                                                </a>
                                            </div>
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