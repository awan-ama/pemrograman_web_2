<?php require 'Model.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Data Peminjaman</title>
</head>
<body>

<h2>Data Peminjaman</h2>
<table class="table ">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">ID Peminjaman</th>
      <th scope="col">Nama Peminjam</th>
      <th scope="col">Buku yang Dipinjam</th>
      <th scope="col">Tanggal Peminjaman</th>
      <th scope="col">Tanggal Pengembalian</th>
      <th scope="col">Edit</th>
      <th scope="col">Hapus</th>
    </tr>
</thead>
<tbody>
    <?php
    $lending = getPinjam();
    $no = 1;
    
    foreach ($lending as $lend) {
        $id_peminjaman = $lend['id_peminjaman'];
        $tgl_pinjam = $lend['tgl_pinjam'];
        $tgl_kembali = $lend['tgl_kembali'];
        $id_member = $lend['id_member'];
        $id_buku = $lend['id_buku'];
        echo "
        <tr>
            <td align='center'>$no</td>
            <td>$id_peminjaman</td>
            <td>$id_member</td>
            <td>$id_buku</td>
            <td>$tgl_pinjam</td>
            <td>$tgl_kembali</td>
            <td><a href='FormPeminjaman.php?id=$id_peminjaman'>Edit</a></td>
            <td><a href='Peminjaman.php?delete_id_peminjaman=$id_peminjaman' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'>Hapus</a></td>
            </tr>";
        $no++;
    }
?>
</tbody>
</table>
<a href="FormPeminjaman.php">Tambah Peminjaman</a>
</body>
</html>