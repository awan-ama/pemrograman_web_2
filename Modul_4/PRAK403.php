<?php
$nilai = [
    [
        "no" => 1, "nama" => "Ridho",
        "matkul" => [
            ["nama_mk" => "Pemrograman I", "sks" => 2],
            ["nama_mk" => "Praktikum Pemrograman I", "sks" => 1],
            ["nama_mk" => "Pengantar Lingkungan Lahan Basah I", "sks" => 2],
            ["nama_mk" => "Arsitektur Komputer", "sks" => 3]
        ]
    ],
    [
        "no" => 2, "nama" => "Ratna",
        "matkul" => [
            ["nama_mk" => "Basis Data I ", "sks" => 2],
            ["nama_mk" => "Praktikum Basis Data I", "sks" => 1],
            ["nama_mk" => "Kalkulus", "sks" => 3]
        ]
    ],
    [
        "no" => 3, "nama" => "Tono",
        "matkul" => [
            ["nama_mk" => "Rekayasa Perangkat Lunak", "sks" => 3],
            ["nama_mk" => "Analisis dan Perancangan Sistem", "sks" => 3],
            ["nama_mk" => "Komputasi Awan", "sks" => 3],
            ["nama_mk" => "Kecerdasan Bisnis", "sks" => 3]
        ]
    ],
];

for ($i = 0; $i < count($nilai); $i++) {
    $jumlahSKS = 0;
    for ($j = 0; $j < count($nilai[$i]["matkul"]); $j++) {
        $jumlahSKS += $nilai[$i]["matkul"][$j]["sks"];
    }
    $nilai[$i]["jumlahSKS"] = $jumlahSKS;
    if ($nilai[$i]["jumlahSKS"] < 7) {
        $nilai[$i]["keterangan"] = "Revisi KRS";
        $nilai[$i]["keterangan_bg"] = "red";
    } else {
        $nilai[$i]["keterangan"] = "Tidak Revisi KRS";
        $nilai[$i]["keterangan_bg"] = "#00B050";
    }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK403</title>
    <style>
        table, tr, td{
            border: solid 1px black;
            border-collapse: collapse;
            padding: 5px;
        }
        th {
            border: solid 1px black;
            border-collapse: collapse;
            padding: 5px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <table>
        <tr style = "background-color: #D3D3D3">
            <th>No</th>
            <th>Nama</th>
            <th>Mata Kuliah Diambil</th>
            <th>SKS</th>
            <th>Total SKS</th>
            <th>Keterangan</th>
        </tr>
        <?php
        for ($i = 0; $i < count($nilai); $i++) {
            for ($j = 0; $j < count($nilai[$i]["matkul"]); $j++) {
            echo "<tr>";
            if ($j == 0) {
                echo "<td>". $nilai[$i]["no"]."</td>";
                echo "<td>". $nilai[$i]["nama"]."</td>";
                echo "<td>". $nilai[$i]["matkul"][$j]["nama_mk"]."</td>";
                echo "<td>". $nilai[$i]["matkul"][$j]["sks"]."</td>";
                echo "<td>". $nilai[$i]["jumlahSKS"]."</td>";
                echo "<td style='background-color:".$nilai[$i]["keterangan_bg"].";'>".$nilai[$i]["keterangan"]."</td>";
                echo "</tr>";
            }
            else {
                echo "<td></td>";
                echo "<td></td>";
                echo "<td>". $nilai[$i]["matkul"][$j]["nama_mk"]."</td>";
                echo "<td>". $nilai[$i]["matkul"][$j]["sks"]."</td>";
                echo "<td></td>";
                echo "<td></td>";
                echo "</tr>";
            }
        }
    }
?>
</table>
</body>
</html>