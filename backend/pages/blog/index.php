<?php
include '../../partials/header.php';
include '../../partials/sidebar.php';
include '../../partials/navbar.php';

$qBlogs = "SELECT * FROM blogs";
$result = mysqli_query($connect, $qBlogs) or die(mysqli_error($connect));
?>


<!-- content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5>Tabel Blog</h5>
                    <a href="./create.php" class="btn btn-primary">Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-hover align-middle">
                            <thead class="text-center">
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Judul</th>
                                    <th class="text-center">Tanggal</th>
                                    <th class="text-center">Penulis</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                while ($item = $result->fetch_object()):
                                ?>
                                    <tr>
                                        <td class="text-center"><?= $no ?></td>
                                        <td class="text-center"><?= $item->title ?></td>
                                        <td class="text-center" style="width: 200px;"><?= $item->date ?></td>
                                        <td class="text-center"><?= $item->author ?></td>
                                        <td class="text-center">
                                            <div class="d-flex justify-content-center gap-2">
                                                <a href="./detail.php?id=<?= $item->id ?>" class="btn btn-success rounded-circle p-2" title="Detail">
                                                    <i class='ti ti-eye'></i>
                                                </a>
                                                <a href="./edit.php?id=<?= $item->id ?>" class="btn btn-warning rounded-circle p-2" title="Edit">
                                                    <i class='ti ti-edit'></i>
                                                </a>
                                                <a href="../../actions/blog/destroy.php?id=<?= $item->id ?>" class="btn btn-danger rounded-circle p-2" onclick="return confirm('Apakah anda yakin?')" title="Hapus">
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