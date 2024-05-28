<?php
$namaMessage = $nimMessage = $genderMessage = "";
$nama = $nim = $gender = "";

function inputCheck($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST["submit"])){
   if (empty($_POST["nama"])) {
    $namaMessage = "Nama tidak boleh kosong";
   } else {
    $nama = inputCheck ($_POST["nama"]);
   }
   if (empty($_POST["nim"])) {
    $nimMessage = "NIM tidak boleh kosong";
   } else {
    $nim = inputCheck ($_POST["nim"]);
   }
   if (empty($_POST["gender"])) {
    $genderMessage = "Jenis Kelamin tidak boleh kosong";
   } else {
    $gender = inputCheck ($_POST["gender"]);
   }
   }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK202</title>
</head>
<body>
<form method = "post">
    Nama: <input type = "text" name= "nama" value ="<?= $nama ?>"><span class = "error" style="color:red">* <?= $namaMessage;?></span></br>
    Nim:  <input type = "text" name= "nim" value = "<?= $nim ?>"><span class = "error" style="color:red">* <?= $nimMessage;?></span></br>
    Jenis Kelamin: <span class = "error" style="color:red">* <?= $genderMessage;?></span></br>
    <input type = "radio" name= "gender" value = "Laki-Laki"> Laki-Laki</br>
    <input type = "radio" name= "gender" value = "Perempuan"> Perempuan</br>
    <input type = "submit" name = "submit" value = "Submit">
</form>
<?php
   if (!empty($nama) && !empty($nim) && !empty($gender)){
    echo "$nama <br>";
    echo "$nim <br>";
    echo "$gender <br>";
}
?>
</body>
</html>