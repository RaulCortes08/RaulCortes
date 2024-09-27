<?php
    $student=['Luis', 'Juan', 'Ana', 'Pedro', 'Maria'];
    $StudentMarks=[];
    for($i=0; $i<5; $i++){
        $studentM['Maths']=rand(0,10);
        $studentM['Physics']=rand(0,10);
        $studentM['Chemistry']=rand(0,10);
        $studentM['English']=rand(0,10);
        $StudentMarks[$student[$i]]=$studentM;
    }
    foreach($StudentMarks as $name=>$marks){
                echo $name."<br>";
    }
?>