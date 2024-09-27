<?php

$num= readline();

for($i=1;$i<=$num;$i++){
  $cont=0;
  for($j=1;$j<=$i;$j++){
    if($i%$j==0){
      $cont++;
    }
  }
  if($cont==2){
    echo "El numero $i es primo \n";
  }
  
}
 
?>
