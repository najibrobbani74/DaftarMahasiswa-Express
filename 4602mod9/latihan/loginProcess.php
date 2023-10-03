<?php
session_start();
require_once "connection.php";
if (!isset($_POST['username']) || !isset($_POST['password'])) {
    header("Refresh:0; url=login.php");
  exit();
}
$sql = 'SELECT id, name FROM users where username = "'.$_POST['username'].'" AND password = MD5("'.$_POST['password'].'")';
$res = mysqli_query($con,$sql);
if (mysqli_num_rows($res) > 0) {
    $user = mysqli_fetch_assoc($res);
    $_SESSION['userid'] = $user['id'];
    $_SESSION['name'] = $user['name'];
    echo "<script>alert('Login Success');window.location='index.php'</script>";
} else {
    echo "<script>alert('Login Failed');window.location='login.php'</script>";
}
?>
