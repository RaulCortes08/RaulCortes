<?php

function searchMinimunvalue($array){
    $min = $array[0];
    for($i = 1; $i < count($array); $i++){
        if($array[$i] < $min){
            $min = $array[$i];
        }
    }
    return $min;
}

function searchMaximunvalue($array){
    $max = $array[0];
    for($i = 1; $i < count($array); $i++){
        if($array[$i] > $max){
            $max = $array[$i];
        }
    }
    return $max;
}

function Average($array){
    $sum = 0;
    for($i = 0; $i < count($array); $i++){
        $sum += $array[$i];
    }
    return $sum / count($array);
}

function IsInArray($array, $value){
    for($i = 0; $i < count($array); $i++){
        if($array[$i] == $value){
            return true;
        }
    }
    return false;
}


?>