<?php
function lucky($age, $single){
    $condition = ($age >= 18 and $single);
    if($condition){
        echo "lucky";
    }else{
        echo "unlucky";
    }
}

$age = 18;
$single = false;
lucky($age, $single);