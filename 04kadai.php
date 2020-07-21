<?php

//課題1
function sum($a){
	return $a*2;
}
echo sum();

//課題2
function sum1($a, $b){
    return $a + $b;
}
echo sum1();

//課題3
function sum2($arr){
$arr = array(1, 3, 5, 7, 9);
$result = array_product($arr);
return $result;
}
echo sum2($arr);

//課題4
function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if($max_number < $a){
            $max_number = $a;
        }
    }
return $max_number;
}
echo max_array();
?>


