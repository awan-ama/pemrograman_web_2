<?php require 'Model.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Data Buku</title>
</head>
<body>

<h2>Data Buku</h2>
<table class="table ">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Judul Buku</th>
      <th scope="col">ID Buku</th>
      <th scope="col">Penulis</th>
      <th scope="col">Penerbit</th>
      <th scope="col">Tahun Terbit</th>
      <th scope="col">Edit</th>
      <th scope="col">Hapus</th>
    </tr>
</thead>
<tbody>
    <?php
    $books = getBuku();
    $no = 1;
    
    foreach ($books as $book) {
        $id_buku = $book['id_buku'];
        $judul_buku = $book['judul_buku'];
        $penulis = $book['penulis'];
        $penerbit = $book['penerbit'];
        $tahun_terbit = $book['tahun_terbit'];
        echo "
        <tr>
            <td>$no</td>
            <td>$judul_buku</td>
            <td>$id_buku</td>
            <td>$penulis</td>
            <td>$penerbit</td>
            <td>$tahun_terbit</td>
            <td><a href='FormBuku.php?id=$id_buku'>Edit</a></td>
            <td><a href='Buku.php?delete_id_buku=$id_buku' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'>Hapus</a></td>
        </tr>";
        $no++;
    }
?>
</tbody>
</table>
<a href="FormBuku.php">Tambah Buku</a>
</body>
</html>