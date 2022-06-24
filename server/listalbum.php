<?php

require_once "database.php";
header('Content-Type: application/json');

if ($_GET["genre"] == "all") {
    echo json_encode($database);
} else {
    $arr = [];
    foreach ($database as $album) {
        if ($album["genre"] == $_GET["genre"]) {
            $arr[] = $album;
        }
    }
    echo json_encode($arr);
}
