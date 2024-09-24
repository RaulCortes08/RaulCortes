<?php

$array1 = array fn rand(1, 1000) range(1, 3000);

$frequency = array_count_values($array1);

print_r($frequency);    






?>