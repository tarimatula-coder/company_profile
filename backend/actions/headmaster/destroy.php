<?php
include '../../app.php';
include './show.php';
$storages = "../../../storages/headmaster/";

// hapus gambar lama jika ada
if (!empty($headmaster->headmaster_photo) && file_exists($storages . $headmaster->headmaster_photo)) {
    unlink($storages . $headmaster->headmaster_photo);
}

// Hapus data
$qDelete = "DELETE FROM headmasters WHERE id = '$headmaster->id'";
$result = mysqli_query($connect, $qDelete) or die(mysqli_error($connect));

// cek apakah data berhasil di hapus atau tidak
if ($result) {
    echo " 
         <script>    
            alert('Data berhasil dihapus');
            window.location.href='../../pages/headmaster/index.php';
        </script>
            ";
} else {
    echo "
         <script>    
            alert('Data gagal dihapus');
            window.location.href='../../pages/headmaster/index.php';
         </script>
     ";
}
