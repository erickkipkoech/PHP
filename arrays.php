<?php
//simple array
$numbers=[1,2,3,4];
$fruits=array('pineapple','banana','orange','mango');
//echo $fruits[1];

//Associative array
$colors=[
    1=>'red',
    2=>'blue',
    3=>'white',
    4=>'yellow'
];
//echo $colors[1];
$hex=[
    'blue'=>'#0f0'
];
//echo $hex['blue'];
$people=[[
    'firstName'=>'Erick',
    'lastName'=>'Kipkoech',
    'email'=>'cheruiyotkipkoech612@gmail.com'
    ],
    [
    'firstName'=>'Brad',
    'lastName'=>'Travis',
    'email'=>'tarvis@gmail.com'
    ],
    [
    'firstName'=>'Lynn',
    'lastName'=>'Morris',
    'email'=>'morris@gmail.com'
    ],
];
//echo $person['firstName'];
//echo $people[1]['firstName'];
var_dump(json_encode($people));
?>