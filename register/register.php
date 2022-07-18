<?php 

if($_Post["submit"]){
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$username = $_POST["username"];
$email = $_POST["email"];


$db = new mysqli('localhost','root', '', 'techone') ;
$sql = "INSERT INTO USERS(firstname, lastname, username, email) values('$firstname', '$lastname', '$username', '$email')" ;
$db -> query($sql) ;
}


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
    <form action="" method="post">
        <input type="text" placeholder="First Name" name="firstname" />
        <br>
        <input type="text" placeholder="Last Name" name="lastname" />
        <br>
        <input type="text" placeholder="User Name" name="username" />
        <br>
        <input type="email" placeholder="Email" name="email" />
        <br>
        <input type="submit" value="Submit" name="submit"/>
    </form>

    
</body>
</html>