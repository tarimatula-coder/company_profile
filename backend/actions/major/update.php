<?php
include '../../app.php';
include './show.php';

if (isset($_POST['tombol'])) {
    $major_name = escapeString($_POST['major_name']);
    $major_description = escapeString($_POST['major_description']);
    $head = escapeString($_POST['head']);

    $major_imageNew = $major->major_image;
    $storages = "../../../storages/major/";

    //cek apakah user mengupload gambar baru
    if (!empty($_FILES['major_image']['tmp_name'])) {
        $major_imageOld = $_FILES['major_image']['tmp_name'];
        $major_imageNew = time() . '.png';

        // hapus gambar lama jika ada
        if (!empty($major->major_image) && file_exists($storages . $major->major_image)) {
            unlink($storages . $major->major_image);
        }

        // simpan gambar baru
        move_uploaded_file($major_imageOld, $storages . $major_imageNew);
    }

    $qUpdate = "UPDATE majors SET major_name='$major_name', major_description='$major_description', head='$head', major_image='$major_imageNew' WHERE id='$id'";

    $result = mysqli_query($connect, $qUpdate) or die(mysqli_error($connect));
    if ($result) {
        echo " 
         <script>    
            alert('Data berhasil diubah');
            window.location.href='../../pages/major/index.php';
        </script>
            ";
    } else {
        echo "
         <script>    
            alert('Data gagal diubah');
            window.location.href='../../pages/major/create.php';
         </script>
     ";
    }
}
