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
  $avgMaths=0;
    foreach ($StudentMarks as $marks) {
        $avgMaths += $marks['Maths'];
    }
    $avgMaths /= count($StudentMarks);
    echo "The average Maths mark is: " . $avgMaths;

?>