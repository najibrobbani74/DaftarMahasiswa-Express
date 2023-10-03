<?php
require_once "connection.php";
if (isset($_POST['edit'])) {
    $query = "UPDATE diary SET 
    judul='".$_POST['judul']."',
    isi='".$_POST['isi']."',
    tanggal=NOW() 
    WHERE id=".$_POST['id'];
    if (mysqli_query($con, $query)) {
        echo '<script>alert("Data updated");window.location = "index.php"</script>';
    } else {
        echo '<script>alert("Failed");window.location = "index.php"</script>';
    };
}