<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div><br>
                <label>Input:</label>
                <input type="text" name="something">
            </div><br>
        </form>
    </body>
</html>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["something"])){
        echo 'I was Enter!!<br><hr>';
    } else {
        echo ":( <br><hr>";
    }
    foreach($_SERVER as $key => $value){
        echo "{$key} = {$value}<br>";
    }
?>