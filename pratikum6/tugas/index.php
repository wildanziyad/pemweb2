<?php 

    include 'koneksi.php';

    //show data
    $query = "SELECT * FROM anak_anak";
    $result = $conn->query( $query );

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Anak Sekolah</title>
</head>
<body>

<h2>Data Anak Anak </h2>
<table border="1" style="width:100%">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Asal</th>
            <th>Tgl_lahir</th>
            <th>Umur</th>
            <th>Aksi</th>
        </tr>

        <?php while ($row = $result->fetch_assoc( )) : ?>
        <tr>
            <td> <?= $row ['id'] ?></td>
            <td><?= $row ['Nama'] ?></td>
            <td><?= $row ['Asal'] ?></td>
            <td><?= $row ['lahir'] ?></td>
            <td><?= $row ['Umur'] ?></td>
            <td>
                <a href="edit.php?id=; ?>">Edit</a>
                <a href="delete.php?id=; ?>">Delete</a>
            </td>
        </tr>

        <?php  endwhile; ?>
    </table>


<br>
    <h2>Tambah Data Anak Anak </h2>
    <form action="insert.php" method="POST">
        Nama: <input type="text" name="Nama" required><br>
        Asal: <input type="text" name="Asal" required><br>
        tgl_Lahir: <input type="text" name="lahir" required><br>
        Umur: <input type="number" name="Umur" required><br>
        <input type="submit" value="Tambah">
    </form>
</body>
</html>