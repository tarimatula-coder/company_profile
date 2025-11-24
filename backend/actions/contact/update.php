<?php
include '../../app.php';

if (isset($_POST['tombol'])) {
    $id = $_GET['id'];
    $contact = escapeString($_POST['contact']);
    $link= escapeString($_POST['link']);

    $imgOld = $_FILES['img']['tmp_name'];
    $imgNew = time() . ".png";

    $storages = "../../../storages/contact/";

    if (move_uploaded_file($imgOld, $storages . $imgNew)) {

        $qUpdate = "UPDATE contacts SET contact='$contact', link='$link', img='$imgNew' WHERE id='$id'";
        
        mysqli_query($connect, $qUpdate) or die(mysqli_error($connect));
        echo " 
    <script>    
        alert('Data berhasil diubah');
        window.location.href='../../pages/contact/index.php';
    </script>
            ";
    } else {
        echo "
    <script>    
        alert('Data gagal diubah');
        window.location.href='../../pages/contact/create.php';
    </script>
    ";
    }
}
