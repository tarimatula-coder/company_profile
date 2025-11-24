<?php
include '../../app.php';

if (isset($_POST['tombol'])) {
    $contact = escapeString($_POST['contact']);
    $link = escapeString($_POST['link']);
    $imgOld = $_FILES['img']['tmp_name'];
    $imgNew = time() . ".png";

    $storages = "../../../storages/contact/";
    if (move_uploaded_file($imgOld, $storages . $imgNew)) {
        $qInsert = "INSERT INTO contacts(contact, link, img) VALUES('$contact', '$link', '$imgNew')";

        mysqli_query($connect, $qInsert) or die(mysqli_error($connect));
        echo " 
    <script>    
        alert('Data berhasil ditambah');
        window.location.href='../../pages/contact/index.php';
    </script>
            ";
    } else {
        echo "
    <script>    
        alert('Data gagal ditambah');
        window.location.href='../../pages/contact/create.php';
    </script>
    ";
    }
}
