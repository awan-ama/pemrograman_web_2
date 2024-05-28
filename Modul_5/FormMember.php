<?php
require 'Model.php';

$id_member = '';
$nama_member = '';
$nomor_member = '';
$alamat = '';
$tgl_mendaftar = '';
$tgl_terakhir_bayar = '';
$is_edit = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_member = $_POST['nama_member'];
    $nomor_member = $_POST['nomor_member'];
    $alamat = $_POST['alamat'];
    $tgl_mendaftar = $_POST['tgl_mendaftar'];
    $tgl_terakhir_bayar = $_POST['tgl_terakhir_bayar'];

    if (isset($_POST['update'])) {
        $id_member = $_POST['id_member_lama'];
        $result = updateMember($id_member, $id_member, $nama_member, $nomor_member, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar);
        $message = $result ? "Data Member berhasil diubah" : "Gagal mengubah data Member";
    } else {
        $id_member = $_POST['id_member'];
        $result = addMember($id_member, $nama_member, $nomor_member, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar);
        $message = $result ? "Data Member berhasil ditambahkan" : "Gagal menambahkan data Member";
    }
    echo "<script>alert('$message'); window.location='Member.php';</script>";
    exit;
} elseif (isset($_GET['id'])) {
    $id_member = $_GET['id'];
    $member = getMemberById($id_member);

    $nama_member = $member['nama_member'];
    $nomor_member = $member['nomor_member'];
    $alamat = $member['alamat'];
    $tgl_mendaftar = $member['tgl_mendaftar'];
    $tgl_terakhir_bayar = $member['tgl_terakhir_bayar'];
    $is_edit = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title><?php echo $is_edit ? 'Edit' : 'Tambah'; ?> Data Member</title>
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
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <?php if ($is_edit): ?>
        <input type="hidden" name="id_member_lama" value="<?php echo $id_member; ?>">
    <?php else: ?>
        <div class="form-group row">
            <label for="id_member" class="col-4 col-form-label">ID Member</label>
            <div class="col-8">
                <input id="id_member" name="id_member" type="number" class="form-control" required>
            </div>
        </div>
    <?php endif; ?>
    <div class="form-group row">
        <label for="nama_member" class="col-4 col-form-label">Nama Member</label>
        <div class="col-8">
            <input id="nama_member" name="nama_member" type="text" class="form-control" value="<?php echo $nama_member; ?>" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="nomor_member" class="col-4 col-form-label">Nomor Member</label>
        <div class="col-8">
            <input id="nomor_member" name="nomor_member" type="text" class="form-control" value="<?php echo $nomor_member; ?>" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="alamat" class="col-4 col-form-label">Alamat</label>
        <div class="col-8">
            <input id="alamat" name="alamat" type="text" class="form-control" value="<?php echo $alamat; ?>" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="tgl_mendaftar" class="col-4 col-form-label">Tanggal Mendaftar</label>
        <div class="col-8">
            <input id="tgl_mendaftar" name="tgl_mendaftar" type="datetime-local" class="form-control" value="<?php echo $is_edit ? date('Y-m-d\TH:i', strtotime($tgl_mendaftar)) : ''; ?>" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="tgl_terakhir_bayar" class="col-4 col-form-label">Tanggal Terakhir Bayar</label>
        <div class="col-8">
            <input id="tgl_terakhir_bayar" name="tgl_terakhir_bayar" type="date" class="form-control" value="<?php echo $tgl_terakhir_bayar; ?>" required>
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