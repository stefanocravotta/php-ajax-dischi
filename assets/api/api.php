<?php

require_once __DIR__ . "/../db/albums_db.php";

$result= [];
$success= true;
$error_msg = '';

header('Content-Type: application/json');

echo json_encode($albums_db);