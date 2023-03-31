<?php
require_once("connect.php");
$table = $_POST['tableName'];
$sql = "SELECT `orak`.`Oraszam`, `orarend`.`Oraszam`\n"

    . "FROM `orarend`\n"

    . "    INNER JOIN `orak` ON `orak`.`Oraszam` = `orarend`.`Oraszam`;";
    
$result = $mysqli->query($sql);
$data = [];
while ($row = $result->fetch_assoc()) {
    $sor = [];
    $sor['Name'] = $row['Oraszam'];
    $data[] = $sor;
}
echo json_encode($data);
?>