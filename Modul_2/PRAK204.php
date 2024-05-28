<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK204</title>
</head>
<body>
<form method = "post">
    Nilai: <input type = "text" name= "nilai"></br>
    <input type = "submit" name = "submit" value = "Konversi">
</form>
<?php
   if (isset($_POST["submit"])){
   $nilai =  $_POST["nilai"];

    if ($nilai == 0) {
        echo "<h2>Hasil: Nol</h2>";
    }
    elseif ($nilai >= 1 && $nilai < 10) {
        echo "<h2>Hasil: Satuan</h2>";
    }
    elseif ($nilai >= 11 && $nilai < 20) {
        echo "<h2>Hasil: Belasan</h2>";
    }
    elseif ($nilai >= 10 && $nilai < 100) {
        echo "<h2>Hasil: Puluhan</h2>";
    }
    elseif ($nilai >= 100 && $nilai < 1000) {
        echo "<h2>Hasil: Ratusan</h2>";
    }
    elseif ($nilai >= 1000) {
        echo "<h2>Hasil: Anda Menginput Melebihi Limit Bilangan</h2>";
    }
}
?>
</body>
</html>