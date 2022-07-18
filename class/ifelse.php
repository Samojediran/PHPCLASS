<?php


// 1-7  -- you are an infant
// 7-17 -- you are a teenager
// 18-49 -- you are an adult
// 50--99 = you are old
// above you are methussela 

$firstName = 'John' ;
$lastName = 'James' ;
$age = 15 ;

$salary = 0 ;
if($age <= 10){
    if($firstName != 'John'){
        $salary = 2500;
    }
}
else if($age > 10 && $age <=20){
    $salary = 3500;
}

$fullName = $lastName." ".$firstName ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello <?php echo $fullName ; ?></h1>
    <h1>Age <?php echo $age; ?></h1>
    <h1>salary <?php echo $salary; ?></h1>
</body>
</html>