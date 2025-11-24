<?php
include '../../app.php';
include './show.php';

if (isset($_POST['tombol'])) {
    $teacher_name = escapeString($_POST['teacher_name']);
    $gender = escapeString($_POST['gender']);
    $teacher_major = escapeString($_POST['teacher_major']);

    $teacher_photoNew = $teacher->teacher_photo;
    $storages = "../../../storages/teacher/";

    //cek apakah user mengupload gambar baru
    if (!empty($_FILES['teacher_photo']['tmp_name'])) {
        $teacher_photoOld = $_FILES['teacher_photo']['tmp_name'];
        $teacher_photoNew = time() . '.png';

        // hapus gambar lama jika ada
        if (!empty($teacher->teacher_photo) && file_exists($storages . $teacher->teacher_photo)) {
            unlink($storages . $teacher->teacher_photo);
        }

        // simpan gambar baru
        move_uploaded_file($teacher_photoOld, $storages . $teacher_photoNew);
    }

    $qUpdate = "UPDATE teachers SET teacher_name='$teacher_name', gender='$gender', teacher_major='$teacher_major', teacher_photo='$teacher_photoNew' WHERE id='$id'";

    $result = mysqli_query($connect, $qUpdate) or die(mysqli_error($connect));
    if ($result) {
        echo " 
         <script>    
            alert('Data berhasil diubah');
            window.location.href='../../pages/teacher/index.php';
        </script>
            ";
    } else {
        echo "
         <script>    
            alert('Data gagal diubah');
            window.location.href='../../pages/teacher/create.php';
         </script>
     ";
    }
}
