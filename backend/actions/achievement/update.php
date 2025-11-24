<?php
include '../../app.php';
include './show.php';

if (isset($_POST['tombol'])) {
    $title = escapeString($_POST['title']);
    $description = escapeString($_POST['description']);
    $winner = escapeString($_POST['winner']);
    $person = escapeString($_POST['person']);

    $imageNew = $achievement->image;
    $storages = "../../../storages/achievement/";

    //cek apakah user mengupload gambar baru
    if (!empty($_FILES['image']['tmp_name'])) {
        $imageOld = $_FILES['image']['tmp_name'];
        $imageNew = time() . '.png';

        // hapus gambar lama jika ada
        if (!empty($achievement->image) && file_exists($storages . $achievement->image)) {
            unlink($storages . $achievement->image);
        }

        // simpan gambar baru
        move_uploaded_file($imageOld, $storages . $imageNew);
    }

    $qUpdate = "UPDATE achievements SET title='$title',  winner='$winner',  person='$person',description='$description', image='$imageNew' WHERE id='$id'";

    $result = mysqli_query($connect, $qUpdate) or die(mysqli_error($connect));
    if ($result) {
        echo " 
         <script>    
            alert('Data berhasil diubah');
            window.location.href='../../pages/achievement/index.php';
        </script>
            ";
    } else {
        echo "
         <script>    
            alert('Data gagal diubah');
            window.location.href='../../pages/achievement/create.php';
         </script>
     ";
    }
}
?>