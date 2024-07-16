<?php

// Array Create in 2 ways
// 1. [] 
// 2. array()

$arr1 = ['Tanvir','Sadia','Maymuna'];
$arr2 = array('Humaira','Ayesha','Khadija');

// echo $arr1[2];
// echo $arr2[1];


//For Loop with Array 
for($i=0;$i<count($arr1);$i++){
  echo $arr1[$i];
}

//Foreach Loop with Array
foreach($arr2 as $item){
  echo $item;
}

?>