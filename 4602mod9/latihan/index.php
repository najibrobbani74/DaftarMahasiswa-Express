<?php
require_once 'connection.php';
require_once 'cekLogin.php';
$query = "SELECT id,judul,isi,tanggal FROM diary where user_id=" . $_SESSION['userid'] . " ORDER BY id DESC ";
$data = mysqli_query($con, $query);

?>
<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Diary</title>
</head>

<body>
    <div class="container mt-5">

        <h1>Diary</h1>
        <hr>
        <span>From : <b> <?= ucwords($_SESSION['name']) ?></b></span><br>
        <a href="newDiaryPage.php" class="btn btn-primary mt-4">Tambah diary </a>
        <a href="logout.php" class="btn btn-secondary mt-4">Logout </a>
        <table class="table mt-4">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Diary</th>
                <th scope="col">Tanggal Update</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            while ($row = mysqli_fetch_array($data)) { ?>
                <tr>
                    <td><?= $i ?></td>
                    <td>
                        <b><?= $row['judul'] ?></b><br>
                        <span><?= $row['isi'] ?></span>
                    </td>
                    <td><?= date("l, M Y | G:i:s", strtotime($row['tanggal'])); ?></td>
                    <td>
                        <button class="btn btn-success badge" onclick="window.location='editDiaryPage.php?id=<?= $row['id'] ?>'">Edit</button>
                        <button class="btn btn-danger badge"  onclick="if(confirm('Are you sure?')){window.location='deleteDiary.php?id=<?= $row['id'] ?>'}">Delete</button>
                    </td>
                </tr>
                <?php $i++;
            } ?>
        </tbody>
    </table>
</div>
</body>

</html>