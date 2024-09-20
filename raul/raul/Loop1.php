<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <style>
table, th, td {
  border:1px solid black;
}
</style>
</head>
<body>
    <?php
        echo "<table>";
       $numero=5;
       for ($i=1;$i<=$numero;$i++){
        echo "<tr>";
        for($f=1;$f<=$i;$f++){
            //echo "<td>".'*'."</td>";
            echo "<td>*</td>";
        }
            echo "<br>";
            echo "</tr>";
       }
       
       echo "</table>";
        
    ?>
</body>
</html>