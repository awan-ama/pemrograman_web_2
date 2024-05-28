<html>
<body>
    <style>
        table {
            border-collapse: separate;
            border-spacing: 2px;
            border: 1px solid black;
        }

        table tr#header {
            background-color:red;
            text-align: center;  
        }

        h2 {
            display: inline-block;
            vertical-align: middle;
            line-height: normal;
        }

        td {
            border: 1px solid black;
        }

    </style>
<?php
$smartphone = array(
    ["series"=>"Samsung Galaxy", "model"=>" S22"],
    ["series"=>"Samsung Galaxy", "model"=>" S22+"],
    ["series"=>"Samsung Galaxy", "model"=>" A03"],
    ["series"=>"Samsung Galaxy", "model"=>" Xcover 5"]);

echo '<table>';
echo '<tr id= "header">';
echo '<td><h2> Daftar Smartphone Samsung </h2></td>';
echo '</tr>';

foreach ($smartphone as $x) {
    echo '<tr><td><p>' .$x['series'] .$x['model']. '</p></td></tr>';
}
echo '</table>';

?>
</body>
</html>