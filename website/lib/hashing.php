<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>
<?php
    $password = 'verySTRONGpassword0123';
    echo "PASSWORD: " . $password . "<br>";
    echo "BCRYPT: " . password_hash($password, PASSWORD_BCRYPT) . "<br>";
    if(password_verify($password,password_hash('something', PASSWORD_BCRYPT))){
        echo "your logged in";
    } else {
        echo "incorrect password";
    }
?>