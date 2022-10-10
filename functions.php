<?php
/*$y=12;
function regUser($email='kipkoecher@ueab.ac.ke'){
    global $y;
    echo $y;
    $x=12;
    echo $email.' registered.';
}

regUser();*/
// using return
function sum($n1=2,$n2=4){
    return $n1+$n2;
}
$number=sum();
 echo $number;
 //undefined function
 $subtract = function($n1,$n2){
    return $n1-$n2;
 };
 echo $subtract(10,5).'<br>';

 //Arrow Function
 $multiply = fn($n1,$n2) => $n1 * $n2;
 echo $multiply(10,3);
?>