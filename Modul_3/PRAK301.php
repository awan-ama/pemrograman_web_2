<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK301</title>
</head>
<body>
<form method = "post">
    Jumlah Peserta: <input type = "text" name= "jumlah"></br>
    <input type = "submit" name = "submit" value = "Cetak">
</form>
<?php
   if (isset($_POST["submit"])){
   $jumlah =  $_POST["jumlah"];

   $i = 0;
   while ($i < $jumlah) {
    $fontcolor = ['red','green'][$i++ % 2];
    echo "<h2><font color = $fontcolor>Peserta ke-$i</h2>";
}
}
?>
</body>
</html>