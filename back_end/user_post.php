<?php
$value = json_decode(file_get_contents("js.json"),true);
array_push($value,$_POST);
file_put_contents("js.json",json_encode($value));
header("location: ../ok.html")

?>