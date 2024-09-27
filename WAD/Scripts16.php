<?php

$text = "Hello my name is Raul";
$array = explode(" ", $text);
$chunks = array_chunk($array, 2);
print_r($chunks);


?>