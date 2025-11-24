<?php
include '../../app.php';
include './show.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['tombol'])) {
    $id = isset($_GET['id']) ? intval($_GET['id']) : 0;

    // Validasi input POST agar aman
    $school_name = isset($_POST['school_name']) ? escapeString($_POST['school_name']) : '';
    $school_tagline = isset($_POST['school_tagline']) ? escapeString($_POST['school_tagline']) : '';
    $school_description = isset($_POST['school_description']) ? escapeString($_POST['school_description']) : '';
    $since = !empty($_POST['since']) ? escapeString($_POST['since']) : date('Y-m-d'); // Default hari ini jika kosong
    $alamat = isset($_POST['alamat']) ? escapeString($_POST['alamat']) : '';

    // Ambil data lama dari DB
    $queryOld = mysqli_query($connect, "SELECT * FROM abouts WHERE id='$id'") or die(mysqli_error($connect));
    $dataOld = mysqli_fetch_assoc($queryOld);

    $school_bannerName = $dataOld['school_banner'];
    $school_logoName = $dataOld['school_logo'];

    // Upload banner baru jika ada
    if (!empty($_FILES['school_banner']['tmp_name'])) {
        $school_bannerName = uniqid() . "_banner.png";
        move_uploaded_file($_FILES['school_banner']['tmp_name'], "../../../storages/about/" . $school_bannerName);
    }

    // Upload logo baru jika ada
    if (!empty($_FILES['school_logo']['tmp_name'])) {
        $school_logoName = uniqid() . "_logo.png";
        move_uploaded_file($_FILES['school_logo']['tmp_name'], "../../../storages/about/" . $school_logoName);
    }

    // Query Update data
    $qUpdate = "UPDATE abouts SET 
                    school_name='$school_name',
                    school_tagline='$school_tagline',
                    school_description='$school_description',
                    since='$since',
                    alamat='$alamat',
                    school_banner='$school_bannerName',
                    school_logo='$school_logoName'
                WHERE id='$id'";

    mysqli_query($connect, $qUpdate) or die(mysqli_error($connect));

    echo "<script>
        alert('Data berhasil diubah');
        window.location.href='../../pages/about/index.php';
    </script>";
}
