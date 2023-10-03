<?php
require_once "connection.php";
if (isset($_GET['id'])) {
    $query = "DELETE FROM diary
    WHERE id=".$_GET['id'];
    if (mysqli_query($con, $query)) {
        echo '<script>alert("Data deleted");window.location = "index.php"</script>';
    } else {
        echo '<script>alert("Failed");window.location = "index.php"</script>';
    };
} else {
    header("Refresh:0; url=index.php");
    exit();
}