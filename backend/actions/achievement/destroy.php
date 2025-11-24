<?php
include '../../app.php';
include './show.php';
$storages = "../../../storages/achievement/";

// hapus gambar lama jika ada
if (!empty($achievement->image) && file_exists($storages . $achievement->image)) {
    unlink($storages . $achievement->image);
}

// Hapus data
$qDelete = "DELETE FROM achievements WHERE id = '$achievement->id'";
$result = mysqli_query($connect, $qDelete) or die(mysqli_error($connect));

// cek apakah data berhasil di hapus atau tidak
if ($result) {
    echo " 
         <script>    
            alert('Data berhasil dihapus');
            window.location.href='../../pages/achievement/index.php';
        </script>
            ";
} else {
    echo "
         <script>    
            alert('Data gagal dihapus');
            window.location.href='../../pages/achievement/index.php';
         </script>
     ";
}
