<?php

$file = json_decode(file_get_contents("database.json"),true);
$post = json_decode(file_get_contents("php://input"),true);

array_push($file,$post);
file_put_contents("database.json",json_encode($file));
echo "saved";

?>