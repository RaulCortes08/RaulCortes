<?php
$numbers = array();
for ($i = 0; $i < 1000; $i++) {
    $numbers[] = rand(1, 3000);
}

$frequency = array_count_values($numbers);

foreach ($frequency as $number => $count) {
    echo "Number $number appears $count times.\n";
}

?>
