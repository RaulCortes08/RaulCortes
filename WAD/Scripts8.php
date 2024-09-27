<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$total=0;
$number=0;

	do {
	    $total = $number*$number;	  
	   $number=readline();
    	echo $total ."<br>";
	  
	}while($number>0);
	echo "You introduce a negative number";



    ?>
</body>
</html>