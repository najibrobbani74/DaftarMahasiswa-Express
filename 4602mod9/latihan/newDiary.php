<?php
require_once 'connection.php';
require_once 'cekLogin.php';
$table = 'diary';

if (!isset($_POST['judul']) || !isset($_POST['isi'])) {
  echo '<script>alert("Bad Request");window.location = "index.php"</script>';
}
$query = "INSERT INTO diary (judul, isi,tanggal,user_id) VALUES ('".$_POST["judul"]."', '".$_POST["isi"]."', NOW(),".$_SESSION['userid'].")";
if (mysqli_query($con, $query)) {
  echo '<script>alert("Data added");window.location = "index.php"</script>';
} else {
  echo '<script>alert("Failed");window.location = "index.php"</script>';
};