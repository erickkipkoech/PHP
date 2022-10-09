
<?php

/*
For loop
for($x = 0; $x <= 10; $x++){
    echo $x;
}

While Loop
$x=1;
while($x <= 2){
    echo $x;
    $x++;
}
do... while
$x = 2;
do{
    echo $x;
    }
    
while($x>=1);{
}

$posts=['First post','Second post','Third post'];
for($x = 0; $x <= count($posts); $x++)
        echo $posts[0];

$posts=['First post','Second post','Third post'];
foreach ($posts as $index=>$post) {
    echo $index.'-'. $post.'<br>';
    }
    */
$person=[
    'first Name' => 'Erick',
    'last Name' => 'Kipkoech',
    'email' => 'kipkoecher@ueab.ac.ke'
];

foreach($person as $key => $value){
    echo "$key - $value<br>";
}
?>