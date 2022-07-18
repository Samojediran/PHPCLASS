<?php

// fuctions : used for grouping task together 
//  types of functions

// $pizza = "piece1 piece2 piece3 piece4 piece5 piece6";
// $pieces = explode(" ", $pizza);
// foreach($pieces as $v){
//     echo $v . "<br>" ;
// }


// $data = "foo:*:1023:1000::/home/foo:/bin/sh" ; 
// $data2 = list($user,$pass,$uid,$gid,$gecos,$home,$shell)= explode(":",$data);
// foreach($data2 as $v){
//     echo $v . "<br>" ;
// }

function welcome(){
    echo "Welcome" ;
} 
// welcome() ;


// functions that return
function Thanks(){
   return "Thank You" ;
}
// $greeting = Thanks() ;
// echo $greeting ;


// functions with parameters and arguments
function sumvalue($a,$b){
        echo  ($a + $b)."<br>" ;
}
// sumvalue(3,5)


//functions whose parameters have keys and values 
function sumdefault($a = 1, $b = 3){
    echo ($a + $b). "<br>" ;
}
sumdefault() ;
sumdefault(2) ;
sumdefault(5,2) ;
?>