<!------------------------------( Part One Comments Below )------------------------------

    Before we begin... DO NOT FORGET THE SEMI COLON!!! ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
    
    http://localhost/php/website/index.php

    _____________________________________________________________________________________
    
    Arithmetic Operators
    
    + - * / ** %

    _____________________________________________________________________________________

    Increment/Decrement Operators
    
    -- ++

    _____________________________________________________________________________________

    Operator Precedence
    
    ()
    **
    * / %
    + -
    
    _____________________________________________________________________________________

------------------------------( Part One Comments Above )------------------------------->

<?php
    $myString = 'Canine Table';
    $myInteger = 23;
    $myFloat = 3.14195;
    $myBoolean = true;
    echo '<hr>String Literal';
    echo "<br>Hello {$myString},<br>You Love PHP.";
    echo "<br>Integer: {$myInteger}";
    echo "<br>Float: {$myFloat}";
    echo "<br>Boolean: {$myBoolean}";
    echo "<br>Float: {$myFloat}";
    echo "<br>Float: {$myFloat}<hr>";

    $x = 10;
    $y = 2;
    $z = null;

    $z = $x ** $y;
    echo "{$x} ** {$y} = {$z}";

    $z = $x * $y;
    echo "<br>{$x} * {$y} = {$z}";

    $z = $x + $y;
    echo "<br>{$x} + {$y} = {$z}";

    $z = $x - $y;
    echo "<br>{$x} - {$y} = {$z}";

    $z = $x / $y;
    echo "<br>{$x} / {$y} = {$z}<hr>";
?>

<!------------------------------( Part Two Comments Below )------------------------------

    _____________________________________________________________________________________
    
    ============================
    =  SUPER GLOBAL VARIABLES  =
    ============================
    _____________________________________________________________________________________

    $_GET, $_POST
    special variables used to collect data from an HTML form
    data is sent to the file in the action attribute of <form>
    <form action=some_file.php method="gey">
    _____________________________________________________________________________________

    $_GET
    Data is appended to the url
    NOT SECURE
    character limit
    Bookmark is possible with w/ values
    GET requests can be cached
    Better for a search page   
    _____________________________________________________________________________________
    
    $_POST
    data is packaged inside the body of the HTML request
    MORE SECURE
    no data limit
    Cannot Bookmark
    GET requests are not cached
    Better for submitting credentials
    _____________________________________________________________________________________

------------------------------( Part Two Comments Above )------------------------------->


<!--( $_GET )--->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form accept="index.php" method="get">
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
                <button>Submit Get Query</button>
            </div>
        </form>
    </body>
</html>
<?php 
     echo "Username: {$_GET["username"]}";
     echo "<br>Password: {$_GET["password"]}<hr>";
?>

<!--( $_POST )--->

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="index.php" method="post">
            <div> 
                <span>
                    <label>Quantity:</label>
                    <input type="text" name="quantity">
                    <button>Submit Post Query</button>
                </span>
            </div>
        </form>
    </body>
</html>
<?php 
    $item = 'Pizza';
    $price = 5.99;

    $quantity = $_POST['quantity'];
    $total = null;
    $total = $quantity * $price;

    echo "You have ordered {$quantity} x {$item}.";
    echo"The total cost is \${$total}<hr>";
?>

<!------------------------------( Part Three Comments Below )------------------------------
    _______________________________________________________________________________________

------------------------------( Part Three Comments Above )------------------------------->

<!--( $_POST )--->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="index.php" method="post">
            <div> 
                <span>
                    <label>x:</label>
                    <input type="text" name="x">
                    <input type="submit" value="total">
                </span>
            </div>
        </form>
    </body>
</html>
<?php 
    $xValue = $_POST["x"];
    $total = null;
    echo "X Value: {$xValue}<br>";
    
    $total = abs($xValue);
    echo "Absolute Value: {$total}<br>";

    $total = round($xValue);
    echo "Rounded Value: {$total}<br>";
    
    $total = floor($xValue);
    echo "Rounded Down Value: {$total}<br>";

    $total = ceil($xValue);
    echo "Rounded Up Value: {$total}<br>";

    $total = sqrt($xValue);
    echo "Square Root Value: {$total}<br>";
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
        <form action="index.php" method="post">
            <div> 
                <span>
                    <label>x:</label>
                    <input type="text" name="x">
                    <label>y:</label>
                    <input type="text" name="y">
                    <input type="submit" value="total">
                </span>
            </div>
        </form>
    </body>
</html>
<?php 
    $xValue = $_POST["x"];
    $yValue = $_POST["y"];
    $total = null;

    echo "X Value: {$xValue}<br>Y Value: {$yValue}<br>";

    $total = pow($xValue,$yValue);
    echo "{$xValue} to the power of {$yValue} equals {$total}<br>";

    $total = min($xValue,$yValue);
    echo "between {$xValue} and {$yValue}, {$total} has the lower value.<br>";

    $total = max($xValue,$yValue);
    echo "between {$xValue} and {$yValue}, {$total} has the higher value.<br>";

    $total = rand(1,6);
    echo "the random number in between 1 and 6 was {$total}.<br>";

    $total = pi();
    echo "PI: {$total}<br>";
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
        <form action="index.php" method="post">
            <div> 
                <span>
                    <label>radius:</label>
                    <input type="text" name="radius">
                    <input type="submit" value="calculate">
                </span>
            </div>
        </form>
    </body>
</html>
<?php 
    $radius = $_POST["radius"];
    $circumference = null;
    $circumference = 2 * pi() * $radius;
    $rounded = round($circumference, 3);
    echo("radius: {$radius}<br>circumference: {$circumference}cm <br>circumference rounded: {$rounded}cm<br>");

    $area = pi() * pow($radius, 2);
    $rounded = round($area, 3);
    echo("area: {$area}cm^2<br>rounded area: {$rounded}cm^2<br>");

    $volume = 4/3 * pi() * pow($radius, 2);
    $rounded = round($volume,3);
    echo("volume: {$volume}cm^3<br>rounded volume: {$rounded}cm^3<hr>");
?>

<!------------------------------( Part Four Comments Below )------------------------------
    ______________________________________________________________________________________

    if statements
    if some condition is true, do something
    if condition is false dont do it or do somthing
    ______________________________________________________________________________________

------------------------------( Part Four Comments Above )------------------------------->

<?php
    $age = 21;

    if($age >= 18){
        echo "You may enter this site.<br>";
    } elseif($age < 0) {
        echo "You have not been born yet.<br>";
    } elseif($age == 0) {
        echo "You were just born.<br>";
    } else {
        echo "are to young to enter this site.<br>";
    }

?>

<!------------------------------( Part Five Comments Below )------------------------------
    ______________________________________________________________________________________

    Logical Operators
    if(condition1 && condition2 || !condition3)
    ______________________________________________________________________________________

    &&
    True if both the left and right conditions are true
    ______________________________________________________________________________________

    ||
    True if the left or right conditions are true
    ______________________________________________________________________________________

    !
    True if Condition is False
    False if Condition is True
    ______________________________________________________________________________________

------------------------------( Part Five Comments Above )------------------------------->

<?php
    $temp = 100;
    $cloudy = false;
    $age = 25;
    $citizen = true;
    $child = false;
    $senior = true;

    if($temp >= 0 && $temp <= 30){
        echo"The weather is bad.<br>";
    } else {
        echo "The weather is good.<br>";
    }

    if(!$cloudy){
        echo "it is not cloudy<br>";
    } else {
        echo "it is cloudy<br>";
    }

    if(!$age >= 18 || !$citizen){
        echo "you can vote<br>";
    } else {
        echo "you can not vote.<br>";
    }

    if(!$child && !$senior){
        $ticket = 15;
    } else {
        $ticket = 10;
    }
    echo "The ticket price is \${$ticket}.<hr>";
?>

<!------------------------------( Part Six Comments Below )------------------------------
    _____________________________________________________________________________________

    switch
    replacement to using many elseif statements
    more efficient, less code
    _____________________________________________________________________________________

------------------------------( Part Six Comments Above )------------------------------->

<?php
    $grade = "A";
    switch($grade){
        case "A":
            echo "You did great.<br>";
            break;
        case "B":
            echo "You good.<br>";
            break;
        case "C":
            echo "You did okay.<br>";
            break;
        case "D":
            echo "You did poorly.<br>";
            break;
        case "F":
            echo "You failed.<br>";
            break;
        default:
            echo "{$grade} is an invalid letter grade.<br>";
            break;
    }
    echo "<hr>";
?>

<!------------------------------( Part Seven Comments Below )------------------------------
    _______________________________________________________________________________________

    For Loops
    repeat some code a certain # of times.
    _______________________________________________________________________________________

------------------------------( Part Seven Comments Above )------------------------------->



<!------------------------------( Part Eight Comments Below )------------------------------
    _______________________________________________________________________________________

    _______________________________________________________________________________________

------------------------------( Part Eight Comments Above )------------------------------->
