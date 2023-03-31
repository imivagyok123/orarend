<?php
require_once("connect.php");
$table = $_POST['tableName'];
$sql = "SELECT `orak`.`Tantargy`, `orak_fajtai`.`Tantargy`\n"

    . "FROM `orak_fajtai`\n"

    . "    INNER JOIN `orak` ON `orak`.`Tantargy` = `orak_fajtai`.`Az`;";

$result = $mysqli->query($sql);
$data = [];
while ($row = $result->fetch_assoc()) {
    $sor = [];
    $sor['Name'] = $row['Tantargy'];
    $data[] = $sor;
}
echo json_encode($data);
?>