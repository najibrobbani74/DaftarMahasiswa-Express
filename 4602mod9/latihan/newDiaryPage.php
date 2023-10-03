<?php
require_once 'cekLogin.php';
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
    <div class="container mt-4">
        <h1>Tambah Diary</h1>
        <form method="POST" action="newDiary.php">
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
        <button class="btn btn-secondary mt-2" onclick="history.back()">Back</button>
    </div>
    <!-- <form action="newDiary.php" method="post">
        <label for="judul">Judul : <br></label>
        <input type="text" name="judul" id="judul"><br>
        <label for="isi"><br>Isi : <br></label>
        <textarea name="isi" id="isi" cols="30" rows="10"></textarea><br>
        <button type="submit">Submit</button>
    </form> -->
</body>

</html>