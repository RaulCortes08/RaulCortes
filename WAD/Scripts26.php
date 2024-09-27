<?php
$text = "I was born in the year 1632, in the city of York,of a good family, though not of that country, my father being a foreigner of Bremen,who settled first at Hull. He got a good estate by merchandise, and leaving off his trade,lived afterwards at York, from whence he had married my mother, whose relations were named Robinson";
function remove_punctuation($text) {
    return preg_replace("/[.,]/", "", $text);
}
$text = remove_punctuation($text);
$array1 = explode(" ", $text);
echo "<br><br><br><br>";
$Unique_words = array_unique($array1);
print_r($Unique_words);

echo "<br><br><br><br>";

//Compact
$result=[];

foreach($Unique_words as $key => $val){
    if (isset($val)){
        array_push($result, $val);
    }
}
print_r($result);

?>