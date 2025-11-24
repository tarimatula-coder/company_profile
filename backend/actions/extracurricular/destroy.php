<?php
include '../../app.php';
include './show.php';
$storages = "../../../storages/extracurricular/";

// hapus gambar lama jika ada
if (!empty($extracurricular->extracurricular_image) && file_exists($storages . $extracurricular->extracurricular_image)) {
    unlink($storages . $extracurricular->extracurricular_image);
}

// Hapus data
$qDelete = "DELETE FROM extracurriculars WHERE id = '$extracurricular->id'";
$result = mysqli_query($connect, $qDelete) or die(mysqli_error($connect));

// cek apakah data berhasil di hapus atau tidak
if ($result) {
    echo " 
         <script>    
            alert('Data berhasil dihapus');
            window.location.href='../../pages/extracurricular/index.php';
        </script>
            ";
} else {
    echo "
         <script>    
            alert('Data gagal dihapus');
            window.location.href='../../pages/extracurricular/index.php';
         </script>
     ";
}
