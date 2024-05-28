<?php
require 'Model.php';

$id_peminjaman = '';
$tgl_pinjam = '';
$tgl_kembali = '';
$id_member = '';
$id_buku = '';
$is_edit = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_peminjaman = $_POST['id_peminjaman'];
    $tgl_pinjam = $_POST['tgl_pinjam'];
    $tgl_kembali = $_POST['tgl_kembali'];
    $id_member = $_POST['id_member'];
    $id_buku = $_POST['id_buku'];

    if (isset($_POST['update'])) {
      $id_peminjaman = $_POST['id_peminjaman_lama'];
      $result = updatePinjam($id_peminjaman, $id_peminjaman, $tgl_pinjam, $tgl_kembali, $id_member, $id_buku);
      $message = $result ? "Data Buku berhasil diubah" : "Gagal mengubah data Buku";
  } else {
      $id_peminjaman = $_POST['id_peminjaman'];
      $result = addPinjam($id_peminjaman, $tgl_pinjam, $tgl_kembali, $id_member, $id_buku);
      $message = $result ? "Data Buku berhasil ditambahkan" : "Gagal menambahkan data Buku";
  }
  echo "<script>alert('$message'); window.location='Peminjaman.php';</script>";
  exit;
}
elseif (isset($_GET['id'])) {
  $id_peminjaman = $_GET['id'];
  $pinjam = getPinjamById($id_peminjaman);
  $tgl_pinjam = $pinjam['tgl_pinjam'];
  $tgl_kembali = $pinjam['tgl_kembali'];
  $id_member = $pinjam['id_member'];
  $id_buku = $pinjam['id_buku'];
  $is_edit = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title><?php echo $is_edit ? 'Edit' : 'Tambah'; ?> Data Peminjaman</title>
</head>
<style>
    .form-group {
        margin: 15px;
    }
    .form-control {
        width: 50%;
    }
</style>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method ="post">
<?php if ($is_edit): ?>
        <input type="hidden" name="id_peminjaman_lama" value="<?php echo $id_peminjaman; ?>">
    <?php else: ?>
  <div class="form-group row">
    <label for="id_peminjaman" class="col-4 col-form-label">ID Peminjaman</label> 
    <div class="col-8">
      <input id="id_peminjaman" name="id_peminjaman" type="number" class="form-control" required>
    </div>
  </div>
  <?php endif; ?>
  <div class="form-group row">
    <label for="tgl_pinjam" class="col-4 col-form-label">Tanggal Pinjam</label> 
    <div class="col-8">
      <input id="tgl_pinjam" name="tgl_pinjam" type="date" class="form-control" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="tgl_kembali" class="col-4 col-form-label">Tanggal Kembali</label> 
    <div class="col-8">
      <input id="tgl_kembali" name="tgl_kembali" type="date" class="form-control" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="id_member" class="col-4 col-form-label">ID Member</label> 
    <div class="col-8">
      <input id="id_member" name="id_member" type="number" class="form-control" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="id_buku" class="col-4 col-form-label">ID Buku</label> 
    <div class="col-8">
      <input id="id_buku" name="id_buku" type="number" class="form-control" required>
    </div>
  </div>
  <div class="form-group row">
        <div class="offset-4 col-8">
            <input name="<?php echo $is_edit ? 'update' : 'add'; ?>" type="submit" value="Submit" class="btn btn-primary">
        </div>
    </div>
</form>
</body>
</html>