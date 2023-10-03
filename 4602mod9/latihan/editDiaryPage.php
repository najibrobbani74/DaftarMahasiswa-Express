<?php
require_once 'connection.php';
require_once 'cekLogin.php';
if (!isset($_GET['id'])) {
    echo '<script>alert("Bad Request");window.location = "index.php"</script>';
}
$query = "SELECT * FROM diary where id=" . $_GET['id'];
$data = mysqli_query($con, $query);
$data = mysqli_fetch_assoc($data);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Diary</title>
</head>

<body>
    <h1>Edit Diary</h1>
    <form action="editDiary.php" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Judul</label>
            <input type="text" name="judul" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Isi</label>
            <input type="textarea" name="isi" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <form action="editDiary.php" method="post">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
        <label for="judul">Judul : <br></label>
        <input type="text" name="judul" id="judul" value="<?= $data['judul'] ?>">
        <label for="isi"><br>Isi : <br></label>
        <textarea name="isi" id="isi" cols="30" rows="10"><?= $data['isi'] ?></textarea><br>
        <button type="submit" name="edit">Submit</button>
    </form>
    <button onclick="history.back()">Back</button>
</body>

</html>