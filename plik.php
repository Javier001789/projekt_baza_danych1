<?php
$db = new mysqli('localhost', 'root', '', 'biuro');
$sql = "SELECT * FROM wycieczki WHERE dostepna = 1";
$result = $db->query($sql);

    while ($row = $result->fetch_assoc()) {
        $dataWyjazdu = $row['dataWyjazdu'];
        $cel = $row['cel'];
        $cena = $row['cena'];
        $dostepna = $row['dostepna'];
        echo "

<table>
    <tr>
    <th>$dataWyjazdu</th>
    <th>$cel</th>
    <th>$cena</th>
    <th>$dostepna</th>
    </tr>
</table>";
    }

$db->close();
?>