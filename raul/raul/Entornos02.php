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
        $var1='1';
        $var2='Este es el primer numero';
        
        
        echo "<table>
        <tr>
            <th>$var1</th>
        </tr>
        <tr>
            <th>$var2</th>
        </tr>
        </table>";
        
    ?>
</body>
</html>