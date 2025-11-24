<?php
include '../../app.php';
include './show.php';

if (isset($_POST['tombol'])) {
    $announcement_title = escapeString($_POST['announcement_title']);
    $announcement_description = escapeString($_POST['announcement_description']);
    $date = escapeString($_POST['date']);
    $author = escapeString($_POST['author']);

    $announcement_imageNew = $announcement->announcement_image;
    $storages = "../../../storages/announcement/";

    //cek apakah user mengupload gambar baru
    if (!empty($_FILES['announcement_image']['tmp_name'])) {
        $announcement_imageOld = $_FILES['announcement_image']['tmp_name'];
        $announcement_imageNew = time() . '.png';

        // hapus gambar lama jika ada
        if (!empty($announcement->announcement_image) && file_exists($storages . $announcement->announcement_image)) {
            unlink($storages . $announcement->announcement_image);
        }

        // simpan gambar baru
        move_uploaded_file($announcement_imageOld, $storages . $announcement_imageNew);
    }

    $qUpdate = "UPDATE announcements SET announcement_title='$announcement_title', announcement_description='$announcement_description', date='$date', author='$author', announcement_image='$announcement_imageNew' WHERE id='$id'";

    $result = mysqli_query($connect, $qUpdate) or die(mysqli_error($connect));
    if ($result) {
        echo " 
         <script>    
            alert('Data berhasil diubah');
            window.location.href='../../pages/announcement/index.php';
        </script>
            ";
    } else {
        echo "
         <script>    
            alert('Data gagal diubah');
            window.location.href='../../pages/announcement/create.php';
         </script>
     ";
    }
}
