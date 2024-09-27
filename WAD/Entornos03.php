<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
table, th, td {
  border:1px solid black;
}
</style>
</head>
<body>
    <?php
        $var1=1;
        $var2='Este es el primer numero';
        $var3=1.2;
        
        echo "<table>
        <tr>
            <th>$var1</th>
            <th>".gettype($var1)."</th>
        </tr>
        <tr>
            <th>$var2</th>
            <th>".gettype($var2)."</th>
        </tr>
        <tr>
            <th>$var3</th>
            <th>".gettype($var3)."</th>
            </tr>
        </table>";
        


    ?>
</body>
</html>