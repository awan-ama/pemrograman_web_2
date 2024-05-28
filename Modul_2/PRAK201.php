<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK201</title>
</head>
<body>
<form method = "post">
    Nama: 1 <input type = "text" name= "nama1"></br>
    Nama: 2 <input type = "text" name= "nama2"></br>
    Nama: 3 <input type = "text" name= "nama3"></br>
    <input type = "submit" name = "submit" value = "Urutkan">
</form>
<?php
if (isset($_POST["submit"])){
    $nama1 = $_POST["nama1"];
    $nama2 = $_POST["nama2"];
    $nama3 = $_POST["nama3"];

    $daftarnama = array ($nama1, $nama2, $nama3);
    sort($daftarnama);

    $length = count($daftarnama);
    for($i = 0; $i < $length; $i++) {
    echo "$daftarnama[$i] <br>";
}
}
?>
</body>
</html>