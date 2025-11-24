<?php
include '../../app.php';
include './show.php';
$storages = "../../../storages/announcement/";

// hapus gambar lama jika ada
if (!empty($announcement->announcement_image) && file_exists($storages . $announcement->announcement_image)) {
    unlink($storages . $announcement->announcement_image);
}

// Hapus data
$qDelete = "DELETE FROM announcements WHERE id = '$announcement->id'";
$result = mysqli_query($connect, $qDelete) or die(mysqli_error($connect));

// cek apakah data berhasil di hapus atau tidak
if ($result) {
    echo " 
         <script>    
            alert('Data berhasil dihapus');
            window.location.href='../../pages/announcement/index.php';
        </script>
            ";
} else {
    echo "
         <script>    
            alert('Data gagal dihapus');
            window.location.href='../../pages/announcement/index.php';
         </script>
     ";
}
