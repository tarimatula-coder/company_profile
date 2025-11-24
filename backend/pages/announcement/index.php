<?php
include '../../partials/header.php';
include '../../partials/sidebar.php';
include '../../partials/navbar.php';

$qAnnouncements = "SELECT * FROM announcements";
$result = mysqli_query($connect, $qAnnouncements) or die(mysqli_error($connect));
?>

<!-- content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5>Tabel Pengumuman</h5>
                    <a href="./create.php" class="btn btn-primary">Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-hover align-middle">
                            <thead class="text-center">
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Judul Pengumuman</th>
                                    <th class="text-center">Deskripsi Pengumuman</th>
                                    <th class="text-center">Tanggal</th>
                                    <th class="text-center">Penulis</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $maxLength = 100; // batas karakter deskripsi
                                while ($item = $result->fetch_object()):
                                    // batasi deskripsi
                                    $description = $item->announcement_description;
                                    if (strlen($description) > $maxLength) {
                                        $description = substr($description, 0, $maxLength) . '...';
                                    }
                                ?>
                                    <tr>
                                        <td class="text-center"><?= $no ?></td>
                                        <td class="text-center"><?= $item->announcement_title ?></td>
                                        <td class="text-center">
                                            <?= $description ?>
                                        </td>
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
                                                <a href="../../actions/announcement/destroy.php?id=<?= $item->id ?>" class="btn btn-danger rounded-circle p-2" onclick="return confirm('Apakah anda yakin?')" title="Hapus">
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