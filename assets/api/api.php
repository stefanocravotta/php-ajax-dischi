<?php

require_once __DIR__ . "/../db/albums_db.php";

$result= [];
$genre = $_GET['genre'];

if(empty($genre)){
    $result = $albums_db;
  }else{
    foreach($albums_db as $album ){
      if($album['genre'] == $genre){
        $result[] = $album;
      }
    }
};

header('Content-Type: application/json');

echo json_encode($result);