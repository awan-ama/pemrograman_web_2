<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK302</title>
</head>
<style>
    img{
        width: 20px;
        height: 20px;
    }
</style>
<body>
<form method = "post">
    Tinggi: <input type = "text" name= "tinggi"></br>
    Alamat Gambar: <input type = "text" name= "alamat"></br>
    <input type = "submit" name = "submit" value = "Cetak">
</form>
<?php
   if (isset($_POST["submit"])){
   $tinggi =  $_POST["tinggi"];
   $alamat =  $_POST["alamat"];

   $i = 0;
   while ($i < $tinggi) {
    $j = 0;
    while ($j < $i) {
        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        $j++;
    }
    $k = $tinggi;
    while ($k > $i) {
        echo "<img src = '$alamat'>";
        $k--;
    }
    echo "</br>";
    $i++; 
}
}
?>
</body>
</html>