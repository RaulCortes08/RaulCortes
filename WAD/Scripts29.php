<?php
$str = "                                          I like to eat bananas with chocolate, I think I will eat some more later when I am hungry";
foreach(count_chars($str, 1) as $i => $val) {
    echo "There were $val instance(s) of \"" , chr($i) , "\" in the string.<br>";
}

echo "<br><br><br><br>";
foreach(count_chars(trim($str),1) as $i => $val) {
    if(chr($i) == " ") {
        echo "There were $val instance(s) of \"space\" in the string.<br>";
    }
}

//echo(str_replace(" ", "", $str));







?>