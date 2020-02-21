
<?php

//課題1
function product($num) 
{
    return $num * 2;
}
echo product(5) . "\n";
 
 
//課題2
function f($a,$b)
{
    return  $a + $b;
}
echo f(5 , 6) . "\n";
 

 
//課題3
function multiple_array($arr)
{
    $value = 1;
    foreach ($arr as $a){
        $value *= $a;
    }
    return $value;
}
echo multiple_array(array(1, 3, 5, 7, 9)) . "\n";


//課題4
function max_array($arr)
{
    $max_number = $arr[0];
    foreach ($arr as $a){
        if ($max_number < $a){
            $max_number = $a;
        } 
    }
    return $max_number;
}
echo max_array(array(4, 1, 2, 3, 5)) . "\n";
 

 
 