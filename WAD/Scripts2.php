<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
         $Food =[
            "Monday"=>"Rice",
            "Tuesday"=>"Macarronni", 
            "Wednesday"=>"Salad", 
            "Thursday"=>"Steak", 
            "Friday"=>"Omelette", 
            "Saturday"=>"Paella",
            "Sunday"=>"Fish and chips",
          ];

          $Week="Thursday";
          switch ($Week) {
            case "Monday":
                echo "The meal for this day is ". $Food["Monday"];
                break;
            case "Tuesday":
                echo "The meal for this day is ". $Food["Tuesday"];
                break;
            case "Wednesday":
                echo "The meal for this day is ". $Food["Wednesday"];
                break;
            case "Thursday":
                echo "The meal for this day is ". $Food["Thursday"];
                break;
            case "Friday":
                echo "The meal for this day is ". $Food["Friday"];
                break;
            case "Saturday":
                echo "The meal for this day is ". $Food["Saturday"];
                break;
            case "Sunday":
                echo "The meal for this day is ". $Food["Sunday"];
                break;
            default:
                echo "There is no meal";
          }

    ?>
</body>
</html>