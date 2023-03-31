<?php
require_once("connect.php");
$table = $_POST['tableName'];
$sql = "SELECT `orak`.`Nap`, `napok`.`Napnev`\n"

    . "FROM `napok`\n"

    . "    INNER JOIN `orak` ON `orak`.`Nap` = `napok`.`id`;";

$result = $mysqli->query($sql);
$data = [];
while ($row = $result->fetch_assoc()) {
    $sor = [];
    $sor['Name'] = $row['Napnev'];
    $data[] = $sor;
}
echo json_encode($data);
?>