<?php
include '../../app.php';
include './show.php';
$storages = "../../../storages/major/";

// hapus gambar lama jika ada
if (!empty($major->major_image) && file_exists($storages . $major->major_image)) {
    unlink($storages . $major->major_image);
}

// Hapus data
$qDelete = "DELETE FROM majors WHERE id = '$major->id'";
$result = mysqli_query($connect, $qDelete) or die(mysqli_error($connect));

// cek apakah data berhasil di hapus atau tidak
if ($result) {
    echo " 
         <script>    
            alert('Data berhasil dihapus');
            window.location.href='../../pages/major/index.php';
        </script>
            ";
} else {
    echo "
         <script>    
            alert('Data gagal dihapus');
            window.location.href='../../pages/major/index.php';
         </script>
     ";
}
