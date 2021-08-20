<?php

$cfg = parse_ini_file('admin/database/config.ini');
$mysqli = new mysqli($cfg['host'], $cfg['username'], $cfg['passwd'], $cfg['dbname'],
    $cfg['port']) or die($mysqli->error);

$sql = array_column($mysqli->query('SHOW TABLES')->fetch_all(), 0);
//$result = mysqli_query($mysqli, $sql);
foreach ($sql as $file) {
    echo strval($file);
}

