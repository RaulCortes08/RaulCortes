<?php
$sum=0;
$total_num=0;

do {
    $num=readline();
    $sum+=$num;
    $total_num++;
 
} while ($num>0);


$avg= $sum/($total_num-1);
echo $avg ."\n";


?>