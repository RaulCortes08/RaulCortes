<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
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
        

       foreach ($Food as $key => $value) {
        echo "The day $key you will eat $value","<br>" ;
        
       
       }






    ?>
</body>
</html>