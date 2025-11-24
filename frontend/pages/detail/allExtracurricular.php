<?php
include '../../../config/connection.php';

// Fungsi Escape String (gunakan OOP)
function escapeString($connect, $string)
{
    if (!is_string($string)) {
        $string = strval($string);
    }
    return $connect->real_escape_string($string);
}

// Ambil keyword pencarian (jika ada)
$keyword = isset($_GET['search']) ? escapeString($connect, $_GET['search']) : "";

$qextracurricular = "SELECT * FROM extracurriculars";
if (!empty($keyword)) {
    $qextracurricular .= " WHERE title LIKE '%$keyword%' 
                       OR description LIKE '%$keyword%'";
}
$resultextracurricular = $connect->query($qextracurricular) or die($connect->error);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Detail lihat semua</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="shortcut icon" type="img/png" href="../../template_user/img/logo.png" />
</head>

<body>
    <!-- Section Ekstrakurikuler -->
    <section id="extracurricular" class="py-5">

        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h1>Ekstrakurikuler</h1>
                    <p class="mx-auto" style="max-width: 600px;">
                        Dalam SMK Negeri 1 Bangsri terdapat 15 ekstrakurikuler, kalian dapat bergabung dan temukan pengalaman lebih
                    </p>
                </div>
            </div>

            <!-- Form Pencarian -->
            <div class="row mb-4">
                <div class="col-md-6 offset-md-3">
                    <form method="GET" action="" class="d-flex">
                        <input type="text" name="search" class="form-control me-2" placeholder="Cari ekstrakulikuler..."
                            value="<?= htmlspecialchars($keyword) ?>">
                        <button type="submit" class="btn btn-primary">Cari</button>
                    </form>
                </div>
            </div>

            <div class="row text-center g-4">
                <?php if ($resultextracurricular->num_rows > 0): ?>
                    <?php while ($item = $resultextracurricular->fetch_object()) : ?>
                        <div class="col-lg-4 col-md-6">
                            <a href="extracurricular.php?id=<?= $item->id ?>" class="extracard-link">
                                <div class="extracard">
                                    <div class="photo-wrapper">
                                        <img src="../../../storages/extracurricular/<?= htmlspecialchars($item->image) ?>"
                                            alt="<?= htmlspecialchars($item->title) ?>"
                                            class="img-fluid">
                                    </div>
                                    <h5 class="extratitle"><?= htmlspecialchars($item->title) ?></h5>
                                    <p class="extradesc"><?= htmlspecialchars($item->description) ?></p>
                                </div>
                            </a>
                        </div>
                    <?php endwhile; ?>
                <?php else: ?>
                    <div class="col-12">
                        <p class="text-muted">Tidak ada data ekstrakulikuler ditemukan.</p>
                    </div>
                <?php endif; ?>

                <a href="../../index.php#extracurricular" class="mt-4">
                    <button type="button" class="btn btn-primary">
                        Kembali
                    </button>
                </a>
            </div>
        </div>
    </section>

    <style>
        /* Hilangkan garis bawah pada teks link */
        #extracurricular a {
            text-decoration: none !important;
            color: inherit;
            /* Biar warna mengikuti konten */
        }

        /* Section Titles */
        .section-subtitle {
            font-size: 16px;
            color: #50c9ce;
            letter-spacing: 2px;
            font-weight: 600;
            text-transform: uppercase;
            margin-bottom: 10px;
        }

        .section-title {
            font-weight: 900;
            font-size: 2.8rem;
            color: #222;
            margin-bottom: 0;
        }

        /* Section Background */
        #extracurricular {
            background: #f0f9ff;
        }

        /* Card */
        .extracard {
            background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);
            border-radius: 25px;
            padding: 40px 30px 50px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15), 0 15px 35px rgba(0, 0, 0, 0.10);
            color: #333;
            position: relative;
            overflow: hidden;
            text-align: center;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .extracard:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.25), 0 20px 45px rgba(0, 0, 0, 0.20);
        }

        /* Photo wrapper */
        .photo-wrapper {
            width: 140px;
            height: 140px;
            margin: 0 auto 25px;
            border-radius: 50%;
            padding: 5px;
            background: linear-gradient(45deg, #f093fb, #f5576c, #4facfe, #00f2fe);
            box-shadow:
                0 0 15px rgba(240, 147, 251, 0.6),
                0 0 25px rgba(255, 85, 108, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            transition: box-shadow 0.3s ease;
        }

        .extracard:hover .photo-wrapper {
            box-shadow:
                0 0 25px rgba(240, 147, 251, 0.9),
                0 0 40px rgba(255, 85, 108, 0.8);
        }

        .photo-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            border-radius: 50%;
            background-color: white;
        }

        /* Title */
        .extracard h5 {
            font-weight: 700;
            font-size: 1.5rem;
            margin: 0;
            color: #333;
            transition: color 0.3s ease;
        }

        .extracard:hover h5 {
            color: #f5576c;
        }
    </style>
</body>

</html>