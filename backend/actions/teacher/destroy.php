<?php
include '../../app.php';
include './show.php';

$storages = "../../../storages/teacher/";

// hapus gambar lama jika ada
if (!empty($teacher->teacher_photo) && file_exists($storages . $teacher->teacher_photo)) {
    unlink($storages . $teacher->teacher_photo);
}

// Hapus data
$qDelete = "DELETE FROM teachers WHERE id = '$teacher->id'";
$result = mysqli_query($connect, $qDelete) or die(mysqli_error($connect));

// cek apakah data berhasil di hapus atau tidak
if ($result) {
    echo " 
         <script>    
            alert('Data berhasil dihapus');
            window.location.href='../../pages/teacher/index.php';
        </script>
            ";
} else {
    echo "
         <script>    
            alert('Data gagal dihapus');
            window.location.href='../../pages/teacher/index.php';
         </script>
     ";
}
