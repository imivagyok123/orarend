<?php
require_once("connect.php");
$table = $_POST['tableName'];
$sql = "SELECT `orak`.`Osztalyok`, `evfolyamok`.`Osztalyok`\n"

    . "FROM `evfolyamok`\n"

    . "    INNER JOIN `orak` ON `orak`.`Osztalyok` = `evfolyamok`.`Az`;";

$result = $mysqli->query($sql);
$data = [];
while ($row = $result->fetch_assoc()) {
    $sor = [];
    $sor['Name'] = $row['Osztalyok'];
    $data[] = $sor;
}
echo json_encode($data);
?>