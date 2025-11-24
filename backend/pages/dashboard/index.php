<?php
include '../../partials/header.php';
include '../../partials/sidebar.php';
include '../../partials/navbar.php';

// Ambil data jumlah guru per gender
$qTeacherGender = "SELECT gender, COUNT(*) as total FROM teachers GROUP BY gender";
$resultTeacherGender = mysqli_query($connect, $qTeacherGender);

$labels = [];
$data = [];

while ($row = mysqli_fetch_assoc($resultTeacherGender)) {
    $labels[] = ucfirst($row['gender']);
    $data[] = $row['total'];
}

// Ambil data nama & jurusan guru
$qTeacherList = "SELECT teacher_name, teacher_major FROM teachers ORDER BY teacher_name ASC";
$resultTeacherList = mysqli_query($connect, $qTeacherList);
?>

<!-- content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center">Selamat datang</h1>

                    <!-- CARD DASHBOARD -->
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <!-- Blog -->
                            <div class="col-md-3 col-6 mb-3">
                                <div class="card text-white shadow-sm" style="background-color:#28a745;">
                                    <div class="card-body text-center p-4">
                                        <i class="bi bi-file-earmark-text-fill fs-9"></i>
                                        <h5 class="mb-2">27</h5>
                                        <small class="fw-bold">BLOG</small>
                                    </div>
                                    <div class="card-footer text-center bg-light py-2">
                                        <a href="../../pages/blog/index.php#blog" class="fw-bold text-success small">View</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Ekstrakurikuler -->
                            <div class="col-md-3 col-6 mb-3">
                                <div class="card text-white shadow-sm" style="background-color:#dc3545;">
                                    <div class="card-body text-center p-4">
                                        <i class="bi bi-mortarboard-fill fs-9"></i>
                                        <h5 class="mb-2">15</h5>
                                        <small class="fw-bold">EKSTRAKURIKULER</small>
                                    </div>
                                    <div class="card-footer text-center bg-light py-2">
                                        <a href="../../pages/extracurricular/index.php#extracurricular" class="fw-bold text-success small">View</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Kerja Sama -->
                            <div class="col-md-3 col-6 mb-3">
                                <div class="card text-white shadow-sm" style="background-color:#ffc107;">
                                    <div class="card-body text-center p-4">
                                        <i class="bi bi-link-45deg fs-9"></i>
                                        <h5 class="mb-2">5</h5>
                                        <small class="fw-bold">KERJA SAMA</small>
                                    </div>
                                    <div class="card-footer text-center bg-light py-2">
                                        <a href="../../pages/cooperation/index.php#cooperation" class="fw-bold text-success small">View</a>
                                    </div>
                                </div>
                            </div>

                            <!-- jurusan -->
                            <div class="col-md-3 col-6 mb-3">
                                <div class="card text-white shadow-sm" style="background-color:#17a2b8;">
                                    <div class="card-body text-center p-4">
                                        <i class="bi bi-mortarboard-fill fs-9"></i>
                                        <h5 class="mb-2">5</h5>
                                        <small class="fw-bold">Jurusan</small>
                                    </div>
                                    <div class="card-footer text-center bg-light py-2">
                                        <a href="../../pages/major/index.php#major" class="fw-bold text-success small">View</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END CARD DASHBOARD -->

                    <!-- Grafik Guru -->
                    <div class="mt-5 text-center">
                        <h3 class="text-center mb-4">Grafik Guru</h3>
                        <div class="d-flex justify-content-center" style="height:400px;">
                            <canvas id="teacherChart" style="max-width:400px; max-height:400px;"></canvas>
                        </div>
                    </div>

                    <!-- Daftar Guru -->
                    <div class="mt-5">
                        <h3 class="text-center mb-4">Daftar Guru</h3>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped text-center">
                                <thead class="table-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Guru</th>
                                        <th>Jurusan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    while ($row = mysqli_fetch_assoc($resultTeacherList)) { ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= htmlspecialchars($row['teacher_name']); ?></td>
                                            <td><?= htmlspecialchars($row['teacher_major']); ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('teacherChart').getContext('2d');
    new Chart(ctx, {
        type: 'pie',
        data: {
            labels: <?php echo json_encode($labels); ?>,
            datasets: [{
                label: 'Jumlah Guru',
                data: <?php echo json_encode($data); ?>,
                backgroundColor: ['#17a2b8', '#dc3545', '#ffc107', '#28a745']
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'bottom'
                }
            }
        }
    });
</script>

<?php
include '../../partials/footer.php';
include '../../partials/script.php';
?>