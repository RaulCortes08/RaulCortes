<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $number1=5;
        $number2=7;
        $operation="-";

        switch($operation){
            
            case"+":
                echo "The result is ". ($number1+$number2);
                    break;
            case "-":
                echo "The result is ". ($number1-$number2);
                    break;
            case "*":
                echo "The result is ". ($number1*$number2);
                    break;
            case "/":
                echo "The result is ". ($number1/$number2);
                    break;
            default:
                echo "Wrong operation";
        }
    ?>
</body>
</html>