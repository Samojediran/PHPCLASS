<?php
    
    
                // ARRAY
    // $name = ['John', 'James' , 'Jack' , 'Juliet'] ; 
    // $name2 = array('John', 'James' , 'Jack' , 'Juliet') ;
    // $y = 0 ; 
    // $n = count($name2) ; 

    // While Loop 
    // echo '<h1> While Loop </h1>' ;
    // while ($y < $n){
    //     echo $name2[$y]. '<br>' ;
    //     $y++ ;
    // }
        
    // For Loop
    // echo '<h1> For Loop </h1>' ;
    // for($x = 0 ; $x < $n ; $x++){
    //     echo $name2[$x]. '<br>' ; 
    // }

    //For Each Loop
    // echo '<h1> ForEach Loop </h1>' ;
    // foreach($name2 as $v){
    //     echo "$v  <br>" ;
    // }



                // ASSOCIATIVE ARRAY 

    $person = array('firstname' => ['tayo', 'Seyi'], 'lastname' => 'James');
    foreach($person as $key => $value){
        if(is_array($value)){
            echo  $key . ":" . implode(',' , $value) . "<br>"  ;
        }else{
            echo " $key  :  $value <br> " ;
        }
        
    }
    echo json_encode($person);
?>


