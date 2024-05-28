<?php require 'Model.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Data Member</title>
</head>
<body>

<h2>Data Member</h2>
<table class="table ">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Member</th>
      <th scope="col">ID Member</th>
      <th scope="col">Nomor Member</th>
      <th scope="col">Alamat Member</th>
      <th scope="col">Tanggal Mendaftar</th>
      <th scope="col">Tanggal Terakhir Membayar</th>
      <th scope="col">Edit</th>
      <th scope="col">Hapus</th>
    </tr>
</thead>
<tbody>
    <?php
    $members = getMember();
    $no = 1;
    
    foreach ($members as $member) {
        $id_member = $member['id_member'];
        $nama_member = $member['nama_member'];
        $nomor_member = $member['nomor_member'];
        $alamat = $member['alamat'];
        $tgl_mendaftar = $member['tgl_mendaftar'];
        $tgl_terakhir_bayar = $member['tgl_terakhir_bayar'];
        echo "
        <tr>
            <td align='center'>$no</td>
            <td>$nama_member</td>
            <td>$id_member</td>
            <td>$nomor_member</td>
            <td>$alamat</td>
            <td>$tgl_mendaftar</td>
            <td>$tgl_terakhir_bayar</td>
            <td><a href='FormMember.php?id=$id_member'>Edit</a></td>
            <td><a href='Member.php?delete_id_member=$id_member' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'>Hapus</a></td>
            </tr>";
        $no++;
    }
?>
</tbody>
</table>
<a href="FormMember.php">Tambah Member</a>
</body>
</html>