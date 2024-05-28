<?php
require 'Model.php';

$id_buku = '';
$judul_buku = '';
$penulis = '';
$penerbit = '';
$tahun_terbit = '';
$is_edit = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_buku = $_POST['id_buku'];
    $judul_buku = $_POST['judul_buku'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];

    if (isset($_POST['update'])) {
      $id_buku = $_POST['id_buku_lama'];
      $result = updateBuku($id_buku, $id_buku, $judul_buku, $penulis, $penerbit, $tahun_terbit);
      $message = $result ? "Data Buku berhasil diubah" : "Gagal mengubah data Buku";
  } else {
      $id_buku = $_POST['id_buku'];
      $result = addBuku($id_buku, $judul_buku, $penulis, $penerbit, $tahun_terbit);
      $message = $result ? "Data Buku berhasil ditambahkan" : "Gagal menambahkan data Buku";
  }
  echo "<script>alert('$message'); window.location='Buku.php';</script>";
  exit;
}
elseif (isset($_GET['id'])) {
  $id_buku = $_GET['id'];
  $buku = getBukuById($id_buku);

  $judul_buku = $buku['judul_buku'];
  $penulis = $buku['penulis'];
  $penerbit = $buku['penerbit'];
  $tahun_terbit = $buku['tahun_terbit'];
  $is_edit = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title><?php echo $is_edit ? 'Edit' : 'Tambah'; ?> Data Buku</title>
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
        <input type="hidden" name="id_buku_lama" value="<?php echo $id_buku; ?>">
    <?php else: ?>
  <div class="form-group row">
    <label for="id_buku" class="col-4 col-form-label">ID Buku</label> 
    <div class="col-8">
      <input id="id_buku" name="id_buku" type="number" class="form-control" required>
    </div>
  </div>
  <?php endif; ?>
  <div class="form-group row">
    <label for="judul_buku" class="col-4 col-form-label">Judul Buku</label> 
    <div class="col-8">
      <input id="judul_buku" name="judul_buku" type="text" class="form-control" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="penulis" class="col-4 col-form-label">Penulis</label> 
    <div class="col-8">
      <input id="penulis" name="penulis" type="text" class="form-control" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="penerbit" class="col-4 col-form-label">Penerbit</label> 
    <div class="col-8">
      <input id="penerbit" name="penerbit" type="text" class="form-control" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="tahun_terbit" class="col-4 col-form-label">Tahun Terbit</label> 
    <div class="col-8">
      <input id="tahun_terbit" name="tahun_terbit" type="number" class="form-control" required>
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