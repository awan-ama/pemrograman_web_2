<?php
$nilai = [
    ["nama" => "Andi", "nim" => "2101001", "uts" => 87, "uas" => 65],
    ["nama" => "Budi", "nim" => "2101002", "uts" => 76, "uas" => 79],
    ["nama" => "Tono", "nim" => "2101003", "uts" => 50, "uas" => 41],
    ["nama" => "Andi", "nim" => "2101004", "uts" => 60, "uas" => 75]
];

for ($i = 0; $i < count($nilai); $i++) {
    $nilai[$i]["akhir"] = $nilai[$i]["uts"] * 0.4 + $nilai[$i]["uas"] * 0.6;
    if ($nilai[$i]["akhir"] >= 80) {
        $nilai[$i]["huruf"] = "A";
    }
    elseif ($nilai[$i]["akhir"] >= 70) {
        $nilai[$i]["huruf"] = "B";
    }
    elseif ($nilai[$i]["akhir"] >= 60) {
        $nilai[$i]["huruf"] = "C";
    }
    elseif ($nilai[$i]["akhir"] >= 50) {
        $nilai[$i]["huruf"] = "D";
    }
    else {
        $nilai[$i]["huruf"] = "E";
    }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK402</title>
    <style>
        table, tr, td{
            border: solid 1px black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>
<body>
    <table>
        <tr style = "background-color: #D3D3D3">
            <td>Nama</td>
            <td>NIM</td>
            <td>Nilai UTS</td>
            <td>Nilai UAS</td>
            <td>Nilai Akhir</td>
            <td>Huruf</td>
        </tr>
        <?php
        for ($i = 0; $i < count($nilai); $i++) {
            echo "<tr>";
            echo "<td>". $nilai[$i]["nama"]."</td>";
            echo "<td>". $nilai[$i]["nim"]."</td>";
            echo "<td>". $nilai[$i]["uts"]."</td>";
            echo "<td>". $nilai[$i]["uas"]."</td>";
            echo "<td>". $nilai[$i]["akhir"]."</td>";
            echo "<td>". $nilai[$i]["huruf"]."</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>