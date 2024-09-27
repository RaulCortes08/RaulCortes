<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $number=6843;
        $n = 0;
        if ($number>10000 or $number<1){
            echo "The number you declare its not valid";
        }else{
            do{
                $number = floor($number / 10);
                $n = $n + 1;
            } while ($number > 0);
        }
        echo " Tu numero tiene " . $n . " digitos";

    
    ?>
</body>
</html>