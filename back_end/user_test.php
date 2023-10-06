<?php

$file = json_decode(file_get_contents("database.json"),true);
$post = json_decode(file_get_contents("php://input"),true);

for ($a = 0; $a < count($file); $a++) { 
    if($file[$a]["user"] == $post["user"] && $file[$a]["pass"] == $post["pass"]) {
        echo "true";
        exit;
    }
}
echo "false";

?>