<?php
include '../../app.php';
include './show.php';

if (isset($_POST['tombol'])) {
    $title = escapeString($_POST['title']);
    $description = escapeString($_POST['description']);

    $imageNew = $extracurricular->image;
    $storages = "../../../storages/extracurricular/";

    //cek apakah user mengupload gambar baru
    if (!empty($_FILES['image']['tmp_name'])) {
        $imageOld = $_FILES['image']['tmp_name'];
        $imageNew = time() . '.png';

        // hapus gambar lama jika ada
        if (!empty($extracurricular->image) && file_exists($storages . $extracurricular->image)) {
            unlink($storages . $extracurricular->image);
        }

        // simpan gambar baru
        move_uploaded_file($imageOld, $storages . $imageNew);
    }

    $qUpdate = "UPDATE extracurriculars SET  title='$title',  description='$description', image='$imageNew' WHERE id='$id'";

    $result = mysqli_query($connect, $qUpdate) or die(mysqli_error($connect));
    if ($result) {
        echo " 
         <script>    
            alert('Data berhasil diubah');
            window.location.href='../../pages/extracurricular/index.php';
        </script>
            ";
    } else {
        echo "
         <script>    
            alert('Data gagal diubah');
            window.location.href='../../pages/extracurricular/create.php';
         </script>
     ";
    }
}
