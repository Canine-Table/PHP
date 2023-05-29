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
        <h1>This is the login page</h1>
        <form action="login.php" method="post">
            <div> 
                <span>
                    <label>Username:</label>
                    <input type="text" name="username">
                </span>
            </div>
            <div> 
                <span>
                    <label>Password:</label>
                    <input type="password" name="password">
                </span>
            </div>
            <div>
                <input type="submit" name="enter" value="enter">
            </div>
            <div>
                <input type="submit" name="home" value="home">
            </div>
        </form>
    </body>
</html>
<?php
    if(isset($_POST["home"])){
        header("Location: /php/website/index.php");
    }
    function empty_session($username,$password){
        $error_count = 0;
        if(empty($username)){
            $_SESSION["username"] = "enter your username above";
            $error_count = $error_count + 1;
        }
        if(empty($password)){
            $_SESSION["password"] = "enter your password above";
            $error_count = $error_count + 1;
        }
        return $error_count;
    }

    if(isset($_POST["enter"]) && !empty($_SESSION["username"]) || !empty($_SESSION["password"])){
        $_SESSION["username"] = $_POST["username"];
        $_SESSION['password'] = $_POST["password"];
    }
    if(empty_session($_SESSION["username"],$_SESSION['password']) == 0){
        header("Location: /php/website/lib/home.php");
    }
    foreach($_SESSION as $key => $value){
        echo "{$key} = {$value}<br>";
    }
?>