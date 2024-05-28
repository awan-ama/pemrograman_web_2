<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK303</title>
</head>
<style>
    img{
        width: 20px;
        height: 20px;
    }
</style>
<body>
<form method = "post">
    Batas Bawah: <input type = "text" name= "bawah"></br>
    Batas Atas: <input type = "text" name= "atas"></br>
    <input type = "submit" name = "submit" value = "Cetak">
</form>
<?php
   if (isset($_POST["submit"])){
   $bawah =  $_POST["bawah"];
   $atas =  $_POST["atas"];

   $i = $bawah;
   do {
    if (($i+7)%5 == 0){
        echo "<img src = 'star.png'>";
    }
    else {
        echo $i;
    }
    echo "&nbsp;";
    $i++;
    }
    while ($i <= $atas);
}
?>
</body>
</html>