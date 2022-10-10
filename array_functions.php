<?php
$fruits=['apple','mango','pear','avocado'];
//get Length
//echo count($fruits);
//search array
//var_dump(in_array('apple',$fruits));
//add to array
$fruits[]= 'grape';
//print_r($fruits);
array_push($fruits, 'blueberry','strawberry');
array_unshift($fruits, 'orange');
//remove from an array
array_pop($fruits);
array_shift($fruits);
//unset($fruits[2]);

//split into 2 chunks
$chunked_array=array_chunk($fruits,4);
//print_r($chunked_array);
//print_r($fruits);

$arr1=[1,2,3];
$arr2=[4,5,6];
$arr4=[7,8,9];

$arr3=array_merge($arr1,$arr2,$arr4);
$arr5=[...$arr1,...$arr2,...$arr4];
//print_r($arr5);
//array combine
$a=['colour1','colour2','colour3'];
$b=['blue','yellow','red'];
$c=array_combine($a,$b);
// array Keys
$keys=array_keys($c);
//flipped array
$flipped=array_flip($keys);
//print_r($flipped);
$numbers=range(1,20);
//print_r($numbers);

//array map
$newNumbers=array_map(function($numbers){
    return "Number ${numbers}";

},$numbers);
//print_r($newNumbers);

//array filter
$lessThan10=array_filter($numbers,fn($number)=>$number<=10);
//print_r($lessThan10);

//summ/reduce array
$sum=array_reduce($numbers, fn($carry,$number)=>$carry+$number);
var_dump($sum);
?>