<?php
  $student=['Luis', 'Juan', 'Ana', 'Pedro', 'Maria'];
  $StudentMarks=[];
  for($i=0; $i<5; $i++){
      $studentM['Maths']=3;
      $studentM['Physics']=5;
      $studentM['Chemistry']=5;
      $studentM['English']=7;
      $StudentMarks[$student[$i]]=$studentM;
  }
  $avg=0;
    foreach($StudentMarks as $name=>$marks){
        echo $name."<br>";
        foreach($marks as $subject=>$mark){
        
        $avg+=$mark;
        }
        echo "Average: ".($avg/4)."<br>";
        $avg=0;
    }


?>