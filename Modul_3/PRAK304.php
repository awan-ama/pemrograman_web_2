<?php
$star = NULL;

if (isset($_POST["star"])){
    $star =  $_POST["star"];
}

if (isset($_POST["tambah"])){
    $star++;
}

if (isset($_POST["kurang"])){
    $star--;
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK304</title>
</head>
<body>
<form method = "post" action = "">
    Jumlah Bintang: <input type = "number" name= "star" required></br>
    <input type = "submit" value = "Submit">
</form>
<?php
if ($star !== NULL) {
    for ($i = 0; $i < $star; $i++) {
        echo "<img src = 'star.png' width = 100px height = 100px>";
    }
?>
    <form method = "post" action ="">
    <input type = "hidden" name = "star" value ="<?= $star; ?>"/>
    <button name = "tambah">Tambah</button>
    <button name = "kurang">Kurang</button>
    </form>
<?php
}
?>
</body>
</html>