<?php
$age='10';
//if($age>=18){
  //  echo 'You are old enough to vote!';
//}else{
  //  echo 'You cannot vote!';
//}
$t=2;
//if($t < 12){
  //  echo 'Good Morning';
    //}else if ($t < 17) {
      //  echo 'Good Afternoon';
    //}
//else{
 //   echo 'Good Evening';
//}
//if(true){
  //  echo '123';
//}
$posts= ['Fisrt Post'];
//if(!empty($posts)){
  //  echo $posts[0];
//}else{
 //   echo 'No post';
//}
//echo !empty($posts) ? $posts[0] : 'No Post';
//$firstPost= !empty($posts) ? $posts[0] : 'No Post';
//$firstPost= !empty($posts) ? $posts[0] : null;
//$firstPost=$posts[0] ?? null;
//echo $firstPost;
$favcolor='white';

switch ($favcolor) {
    case 'red':
        echo "Your favorite color is ${favcolor}";
        break;
    case 'blue':
        echo "Your favorite color is ${favcolor}";
        break;
    case 'green':
        echo "Your favorite color is ${favcolor}";
        break;
    
    default:
        echo "no match";
        break;
}
?>