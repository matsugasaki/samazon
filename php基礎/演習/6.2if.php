<?php
$even_num = [];
$odd_number = [];

function sort_number($num){
    global $even_num, $odd_number;
    
    if($num % 2 == 0){
        array_push($even_num);
    }else{
        array_push($odd_number);
    }
}
?>