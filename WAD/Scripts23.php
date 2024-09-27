<?php
$numbers1 = array();
for ($i = 0; $i < 300; $i++) {
    $numbers1[] = rand(1, 1000);
}
$numbers2 = array();
for ($i = 0; $i < 300; $i++) {
    $numbers2[] = rand(1, 1000);
}

$result=array_diff($numbers1,$numbers2);
print_r($result);

?>