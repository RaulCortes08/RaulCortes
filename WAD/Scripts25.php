<?php
$text = "I was born in the year 1632, in the city of York,
of a good family, though not of that country, my father being a foreigner of Bremen,
who settled first at Hull. He got a good estate by merchandise, and leaving off his trade,
lived afterwards at York, from whence he had married my mother, whose relations were named Robinson";
function remove_punctuation($text) {
    return preg_replace("/[.,]/", "", $text);
}
$text = remove_punctuation($text);
$array = explode(" ", $text);
print_r($array);
?>