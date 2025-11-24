<?php
include '../../app.php';
include './show.php';

if (isset($_POST['tombol'])) {
    $headmaster_name = escapeString($_POST['headmaster_name']);
    $headmaster_description = escapeString($_POST['headmaster_description']);

    $headmaster_photoNew = $headmaster->headmaster_photo;
    $storages = "../../../storages/headmaster/";

    //cek apakah user mengupload gambar baru
    if (!empty($_FILES['headmaster_photo']['tmp_name'])) {
        $headmaster_photoOld = $_FILES['headmaster_photo']['tmp_name'];
        $headmaster_photoNew = time() . '.png';

        // hapus gambar lama jika ada
        if (!empty($headmaster->headmaster_photo) && file_exists($storages . $headmaster->headmaster_photo)) {
            unlink($storages . $headmaster->headmaster_photo);
        }

        // simpan gambar baru
        move_uploaded_file($headmaster_photoOld, $storages . $headmaster_photoNew);
    }

    $qUpdate = "UPDATE headmasters SET headmaster_name='$headmaster_name', headmaster_description='$headmaster_description', headmaster_photo='$headmaster_photoNew' WHERE id='$id'";

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
