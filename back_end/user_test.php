<?php

$file = json_decode(file_get_contents("js.json"),true);


for ($a = 0; $a < count($file); $a++) { 
    if($file[$a]["user"] == $post["user"] && $file[$a]["pass"] == $post["pass"]) {
        echo "true";
        exit;
    }
}
echo "false";

?>