<?php
include '../../partials/header.php';
include '../../partials/sidebar.php';
include '../../partials/navbar.php';

$qAbouts = "SELECT * FROM abouts";
$result = mysqli_query($connect, $qAbouts) or die(mysqli_error($connect));
?>

<!-- content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12 py-5">
            <div class="card mb-3">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5>Tabel About</h5>
                    <a href="./create.php" class="btn btn-primary">Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-hover align-middle">
                            <thead class="text-center">
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Slogan</th>
                                    <th class="text-center">Deskripsi</th>
                                    <th class="text-center">Sejak</th>
                                    <th class="text-center">Alamat</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $maxLength = 100; // batas karakter deskripsi
                                while ($item = $result->fetch_object()):
                                    $description = $item->school_description;
                                    if (strlen($description) > $maxLength) {
                                        $description = substr($description, 0, $maxLength) . '...';
                                    }
                                ?>
                                    <tr>
                                        <td class="text-center"><?= $no ?></td>
                                        <td class="text-center"><?= $item->school_name ?></td>
                                        <td class="text-center"><?= $item->school_tagline ?></td>
                                        <td style="
                                            max-width:300px;
                                            overflow:hidden;
                                            display:-webkit-box;
                                            -webkit-box-orient: vertical;
                                            line-height: 1.4;
                                        ">
                                            <?= $description ?>
                                        </td>
                                        <td class="text-center" style="width: 100px;"><?= $item->since ?></td>
                                        <td class="text-center"><?= $item->alamat ?></td>
                                        <td class="text-center" style="width: 200px;">
                                            <div class="d-flex justify-content-center gap-2">
                                                <a href="./detail.php?id=<?= $item->id ?>" class="btn btn-success rounded-circle p-2" title="Detail">
                                                    <i class='ti ti-eye'></i>
                                                </a>
                                                <a href="./edit.php?id=<?= $item->id ?>" class="btn btn-warning rounded-circle p-2" title="Edit">
                                                    <i class='ti ti-edit'></i>
                                                </a>
                                                <a href="../../actions/about/destroy.php?id=<?= $item->id ?>" class="btn btn-danger rounded-circle p-2" onclick="return confirm('Apakah anda yakin?')" title="Hapus">
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