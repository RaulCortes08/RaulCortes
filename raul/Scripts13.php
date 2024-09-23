<?php


$num=[0,1,2,3,4,5,6,7,8,9,10];

for($i=1;$i<count($num);$i++){
  for($j=1;$j<count($num);$j++){
    echo   $i. " * ".$j. " = " .$i*$j. "\n";
  }
}

?>