<!-- Load Boxicons -->
<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

<?php
$qextracurricular = "SELECT * FROM extracurriculars LIMIT 3";
$resultextracurricular = mysqli_query($connect, $qextracurricular) or die(mysqli_error($connect));
?>

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

        <div class="row text-center">
            <?php while ($item = $resultextracurricular->fetch_object()) : ?>
                <div class="col-lg-4 col-md-6">
                    <a href="./pages/detail/extracurricular.php?id=<?= $item->id ?>" class="extracard-link">
                        <div class="extracard">
                            <div class="photo-wrapper">
                                <img src="../storages/extracurricular/<?= htmlspecialchars($item->image) ?>"
                                    alt="<?= htmlspecialchars($item->title) ?>"
                                    class="img-fluid">
                            </div>
                            <h5 class="extratitle"><?= htmlspecialchars($item->title) ?></h5>
                            <p class="extradesc"><?= htmlspecialchars($item->description) ?></p>
                        </div>
                    </a>
                </div>
            <?php endwhile; ?>
            <div class="row mt-4">
                <div class="col-12 text-center mt-4">
                    <a href="./pages/detail/allExtracurricular.php" class="btn btn-primary">Lihat semua</a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Hilangkan garis bawah pada teks link */
    #extracurricular a {
        text-decoration: none !important;
        color: #fff;
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