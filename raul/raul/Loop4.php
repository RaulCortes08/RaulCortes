<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $secret_num=mt_rand(0,100);
        
        

        for($i=0;$i<=100;$i++){

            if($i==$secret_num){
                echo "Tu numero es igual a $i";
            }
            

        }




    ?>
</body>
</html>