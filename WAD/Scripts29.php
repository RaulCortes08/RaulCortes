<?php
$str="Calleuno,Calledos,CalleleonardoDaVinci, CalleCaminodeLeganes, Callefinal";
$array=(explode("Calle",$str));
for($i=0;$i<count($array);$i++){
  echo ucfirst($array[$i])."<br>";
}

?>