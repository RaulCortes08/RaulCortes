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

    function StudentExists($name, $StudentMarks) {
        if (array_key_exists($name, $StudentMarks)) {
            echo "Notas de $name:<br>";
            foreach ($StudentMarks[$name] as $subject => $mark) {
                echo "$subject: $mark<br>";
            }
        } else {
            echo "El alumno $name no existe.\n";
        }
    }

    
    StudentExists('ari', $StudentMarks);







?>