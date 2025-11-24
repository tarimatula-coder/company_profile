<?php
include '../../app.php';
include './show.php';

if (isset($_POST['tombol'])) {
    $name = escapeString($_POST['name']);
    $status = escapeString($_POST['status']);
    $message = escapeString($_POST['message']);

    $imageNew = $testimonial->image;
    $storages = "../../../storages/testimonial/";

    //cek apakah user mengupload gambar baru
    if (!empty($_FILES['image']['tmp_name'])) {
        $imageOld = $_FILES['image']['tmp_name'];
        $imageNew = time() . '.png';

        // hapus gambar lama jika ada
        if (!empty($testimonial->image) && file_exists($storages . $testimonial->image)) {
            unlink($storages . $testimonial->image);
        }

        // simpan gambar baru
        move_uploaded_file($imageOld, $storages . $imageNew);
    }

    $qUpdate = "UPDATE testimonials SET name='$name', status='$status', message='$message', image='$imageNew' WHERE id='$id'";

    $result = mysqli_query($connect, $qUpdate) or die(mysqli_error($connect));
    if ($result) {
        echo " 
         <script>    
            alert('Data berhasil diubah');
            window.location.href='../../pages/testimoni/index.php';
        </script>
            ";
    } else {
        echo "
         <script>    
            alert('Data gagal diubah');
            window.location.href='../../pages/testimoni/create.php';
         </script>
     ";
    }
}
