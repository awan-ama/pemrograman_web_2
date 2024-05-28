<html>
<body>
    <style>
        table {
            border-collapse: separate;
            border-spacing: 2px;
            border: 1px solid black;
        }

        td {
            border: 1px solid black;
        }
    </style>
<?php
$smartphone = array("Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy A03", "Samsung Galaxy Xcover 5");

echo '<table>';
echo '<tr><td><b> Daftar Smartphone Samsung </b></td></tr>';

foreach ($smartphone as $x) {
    echo '<tr>';
    echo '<td>';
    echo '<p>' .$x . '</p>';
    echo '</td>';
    echo '</tr>';
}

echo '</table>';

?>
</body>
</html>