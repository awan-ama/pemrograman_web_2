<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK305</title>
</head>
<body>
<form method = "post" action ="">
    <input type = "text" name= "teks" required>
    <input type = "submit" name = "submit" value = "Submit">
</form>
<?php
   if (isset($_POST["submit"])){
   $teks = $_POST["teks"];
   $length = strlen($teks);
   $input = str_split($teks);

   $j = 0;
   $k = 0;
   while ($k < $length){
   echo strtoupper($input[$j]);
   for ($i = 1; $i < $length; $i++) {
    echo strtolower($input[$j]);
}
$k++;
$j++;
}
}
?>
</body>
</html>