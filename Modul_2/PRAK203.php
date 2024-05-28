<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK203</title>
</head>
<body>
<form method = "post">
    Nilai: <input type = "text" name= "suhu"></br>
    Dari:</br>
    <input type = "radio" name= "dariSuhu" value = "celcius"> Celcius</br>
    <input type = "radio" name= "dariSuhu" value = "fahrenheit"> Fahrenheit</br>
    <input type = "radio" name= "dariSuhu" value = "reamur"> Reamur</br>
    <input type = "radio" name= "dariSuhu" value = "kelvin"> Kelvin</br>
    Ke: </br>
    <input type = "radio" name= "keSuhu" value = "celcius"> Celcius</br>
    <input type = "radio" name= "keSuhu" value = "fahrenheit"> Fahrenheit</br>
    <input type = "radio" name= "keSuhu" value = "reamur"> Reamur</br>
    <input type = "radio" name= "keSuhu" value = "kelvin"> Kelvin</br>
    <input type = "submit" name = "submit" value = "Konversi">
</form>
<?php
   if (isset($_POST["submit"])){
   $suhu =  $_POST["suhu"];
   $dariSuhu =  $_POST["dariSuhu"];
   $keSuhu =  $_POST["keSuhu"];

   if ($dariSuhu == "celcius") {
    if ($keSuhu == "celcius") {
        echo "<h2>Hasil Konversi: $suhu &deg;C</h2>";
    }
    elseif ($keSuhu == "fahrenheit") {
        echo "<h2>Hasil Konversi: ".($suhu * 1.8 + 32)." &deg;F</h2>";
    }
    elseif ($keSuhu == "reamur") {
        echo "<h2>Hasil Konversi: ".($suhu * 0.8)." &deg;R</h2>";
    }
    elseif ($keSuhu == "kelvin") {
        echo "<h2>Hasil Konversi: ".($suhu + 273.15)." &deg;K</h2>";
    }
   elseif ($dariSuhu == "fahrenheit") {
    if ($keSuhu == "celcius") {
        echo "<h2>Hasil Konversi: ".($suhu - 32) / 1.8." &deg;C</h2>";
    }
    elseif ($keSuhu == "fahrenheit") {
        echo "<h2>Hasil Konversi: $suhu &deg;F</h2>";
    }
    elseif ($keSuhu == "reamur") {
        echo "<h2>Hasil Konversi: ".($suhu - 32) / 2.25." &deg;R</h2>";
    }
    elseif ($keSuhu == "kelvin") {
        echo "<h2>Hasil Konversi: ".($suhu + 459.67) / 1.8." &deg;K</h2>";
    }
   }
   elseif ($dariSuhu == "reamur") {
    if ($keSuhu == "celcius") {
        echo "<h2>Hasil Konversi: ".($suhu * 1.25)." &deg;C</h2>";
    }
    elseif ($keSuhu == "fahrenheit") {
        echo "<h2>Hasil Konversi: ".($suhu * 2.25 + 32)." &deg;F</h2>";
    }
    elseif ($keSuhu == "reamur") {
        echo "<h2>Hasil Konversi: $suhu &deg;R</h2>";
    }
    elseif ($keSuhu == "kelvin") {
        echo "<h2>Hasil Konversi: ".($suhu + 273.15) / 0.8." &deg;K</h2>";
    }
   }
   elseif ($dariSuhu == "kelvin") {
    if ($keSuhu == "celcius") {
        echo "<h2>Hasil Konversi: ".($suhu - 273.15)." &deg;C</h2>";
    }
    elseif ($keSuhu == "fahrenheit") {
        echo "<h2>Hasil Konversi: ".($suhu * 1.8) - 459.67." &deg;F</h2>";
    }
    elseif ($keSuhu == "reamur") {
        echo "<h2>Hasil Konversi: "($suhu - 273) * 0.8." &deg;R</h2>";
    }
    elseif ($keSuhu == "kelvin") {
        echo "<h2>Hasil Konversi: $suhu &deg;K</h2>";
    }
   }
}
}
?>
</body>
</html>