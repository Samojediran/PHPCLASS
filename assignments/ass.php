<?php   
// 1-7  -- you are an infant
// 7-17 -- you are a teenager
// 18-49 -- you are an adult
// 50--99 = you are old
// above you are methussela 

// $age = 100 ;
$return = '' ;


if ($_POST['submit']){
$age = $_POST['Age'];

if($age >= 1 && $age <= 7 ){
    $return =  'you are an infant !';
}else if($age > 7 && $age <=17){
    $return = 'you are a teenager !' ;
}else if($age > 17 && $age <=49){
    $return = 'you are an adult !' ;
}else if($age > 49 && $age <=99){
    $return = 'you are old !' ;
}else if($age > 99){
    $return = 'you are Methussela !' ;
}else{
    $return = 'Please enter a valid age' ;
}
}
// $return = ''

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
    <!-- <h1>AGE : <?php echo $age; ?></h1> -->
    <form action="" method="post">
        <input type="text" name='Age'>
        <input type="submit" value="submit" name='submit'>
    </form>
    <h1><?php echo $return; ?></h1>
</body>
</html>