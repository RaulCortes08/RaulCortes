<?php

$number=[0,4,5,2,-1,-4,0];

$sumneg=0;
$sumposi=0;
$contposi=0;
$contneg=0;
$contzero=0;

for($i=0;$i<count($number);$i++){
  if($number[$i]>0){
    $contposi++;
    $sumposi=$sumposi+$number[$i];
  } else if ($number[$i]<0){
    $contneg++;
    $sumneg=$sumneg+$number[$i];
  }else if($number[$i]==0){
    $contzero++;
  }
}

$avgneg= $sumneg/$contneg;
$avgposi = $sumposi/$contposi;
echo "The average of positive numbers is : $avgposi \n";
echo "The average of negative numbers is : $avgneg \n";
echo "The amount of 0s is : $contzero";

?>