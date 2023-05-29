<?php 
    session_start();
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
    <h1>Home Page</h1>
    <form action="home.php" method="post">
        <input type="submit" name="logout" value="logout">
    </form>
</body>
</html>

<?php
    foreach($_SESSION as $key => $value){
        echo "{$key} = {$value}<br>";
    }
    if(($_POST["logout"])){
        header("Location: /php/website/lib/login.php");
        session_destroy();
    }

    echo "<hr>";
?>