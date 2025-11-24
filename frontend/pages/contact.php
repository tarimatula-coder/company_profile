<?php
// Ambil data contact
$qContact = "SELECT * FROM contacts";
$resultContact = mysqli_query($connect, $qContact) or die(mysqli_error($connect));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <style>
        /* Contact Section Full Biru */
        #contact {
            background: #FA886E;
            /* full biru */
            position: relative;
            z-index: 1;
            padding: 80px 0;
            color: #fff;
            /* teks jadi putih agar kontras */
        }

        #contact .section-title {
            font-weight: 700;
            margin-bottom: 10px;
            color: #fff;
        }

        #contact .section-subtitle {
            color: #f0f0f0;
            margin-bottom: 40px;
            font-size: 0.95rem;
        }

        #contact .contact-card {
            background: #fff;
            border-radius: 12px;
            text-align: center;
            padding: 30px 20px;
            transition: 0.3s;
            color: #333;
            /* teks dalam card tetap gelap */
        }

        #contact .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        }

        #contact .contact-link {
            display: block;
            text-decoration: none;
            color: inherit;
        }

        #contact .contact-icon {
            width: 70px;
            height: 70px;
            margin: 0 auto 15px;
            background: #00bcd4;
            /* lingkaran biru */
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #contact .contact-icon img {
            width: 40px;
            height: 40px;
            object-fit: contain;
        }

        #contact .contact-title {
            font-weight: 700;
            margin-bottom: 10px;
            text-transform: uppercase;
            font-size: 1rem;
        }

        #contact .contact-desc {
            font-size: 0.95rem;
            color: #444;
            line-height: 1.5;
        }
    </style>
</head>

<body>
    <section id="contact">
        <div class="container text-center">
            <!-- Judul -->
            <h3 class="section-title">Hubungi kami</h3>
            <p class="section-subtitle">Berikut adalah informasi untuk dapat terhubung dengan kami</p>

            <!-- Row Contact Info -->
            <div class="row g-4 justify-content-center">
                <?php while ($item = $resultContact->fetch_object()) : ?>
                    <div class="col-md-4">
                        <div class="contact-card">
                            <a href="<?= htmlspecialchars($item->link) ?>" target="_blank" class="contact-link">
                                <div class="contact-icon">
                                    <img src="../storages/contact/<?= htmlspecialchars($item->img) ?>"
                                        alt="<?= htmlspecialchars($item->contact) ?>">
                                </div>
                                <div class="contact-title"><?= htmlspecialchars($item->contact) ?></div>
                            </a>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
</body>

</html>