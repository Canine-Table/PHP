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

    Math Functions
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
    try {
        if(!is_numeric($xValue)){
            throw new Exception("NaN");
        }
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
    } catch (Exception $e){
        echo "Exception: " . $e->getMessage();
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
    try {
        if(!is_numeric($xValue)||!is_numeric($yValue)){
            throw new Exception("NaN");
        }
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
        echo "PI: {$total}";
    } catch (Exception $e){
        echo "Exception: " . $e->getMessage();
    } finally {
        echo "<br>";
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
    try {
        if(!is_numeric($radius)){
            throw new Exception("NaN");
        }
        $circumference = null;
        $circumference = 2 * pi() * $radius;
        $rounded = round($circumference, 3);
        echo("radius: {$radius}<br>circumference: {$circumference}cm <br>circumference rounded: {$rounded}cm<br>");
        $area = pi() * pow($radius, 2);
        $rounded = round($area, 3);
        echo("area: {$area}cm^2<br>rounded area: {$rounded}cm^2<br>");
        $volume = 4/3 * pi() * pow($radius, 2);
        $rounded = round($volume,3);
        echo("volume: {$volume}cm^3<br>rounded volume: {$rounded}cm^3");
    } catch (Exception $e){
        echo "Exception: " . $e->getMessage();
    } finally {
        echo "<hr>";
    }
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

<?php
    $myString = "Hello World<br>";
    for ($i=0;$i<10;$i++) {
        echo "{$i}.) {$myString}";
    }
    echo "<hr>";

    for ($i=9;$i>0;$i--) {
        echo "{$i}.) {$myString}";
    }

    echo "<hr>";
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
                        <label>Enter a number:</label>
                        <input type="text" name="counter">
                        <input type="submit" value="start">
                    </span>
                </div>
            </form>
    </body>
</html>
<?php
    $myNumber = $_POST["counter"];
    try {
        if(!is_numeric($myNumber)){
            throw new Exception("invalid integer");
        }
        $total = null;
        $myFloat = floatval($myNumber);
        $myArray = [];
        for($i=0;$i<=floor($myFloat);$i++){
            $total = $myFloat * $i;
            array_push($myArray,"{$myFloat} * {$i} = {$total}<br>");
        }
        print_r($myArray);
    } catch (Exception $e){
        echo "Error: " . $e->getMessage();
    } finally {
        echo "<hr>";
    }
?>

<!------------------------------( Part Eight Comments Below )------------------------------
    _______________________________________________________________________________________

    While Loops
    do some code indefiniely
    while some condition remains true
    _______________________________________________________________________________________

------------------------------( Part Eight Comments Above )------------------------------->

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
                    <input type="submit" name="start" value="start">
                    <input type="submit" name="reset" value="reset">
                </span>
            </div>
        </form>
    </body>
</html>
<?php
    $counter = 0;
    if(isset($_POST["start"])){
        while(!isset($_POST["reset"])){
            echo "{$counter}";
            $counter++;
        }
        $counter = 0;
    }
    echo "<hr>";
?>

<!------------------------------( Part Nine Comments Below )------------------------------
    ______________________________________________________________________________________

    Arrays
    "Variable" which can hold more than one value at a time

    Assosiative Arrays
    An array made of key => value pairs

    countries => capitals
    id => username
    item => price
    ______________________________________________________________________________________

------------------------------( Part Nine Comments Above )------------------------------->

<?php
    $foods_zero = ["apple","orange","banana","coconut"];
    $foods_one = array("apple","orange","banana","coconut");
    $foods_two = [
        "zero" => "apple",
        "one" => "orange",
        "two" => "banana",
        "three" => "coconut"
    ];

    $capitals = array(
        "Capitals" => "Countries",
        "Japan" => "Kyoto",
        "South Korea" => "Seoul",
        "India" => "New Delhi",
        "USA" => "Las Vegas",
    );

    foreach($foods_zero as $food){
        echo $food . "<br>";
    }
    echo "<br>";
    for($i=0;$i<=count($foods_two);$i++){
        echo array_keys($foods_two)[$i] . "\t";
        echo array_values($foods_two)[$i] . "<br>";
        if($i == 1){
            $foods_one[$i] = "pineapple";
            array_push($foods_one,"orange","kiwi","apple","orange");
            array_pop($foods_one);
            array_shift($foods_one);
            $foods_one = array_reverse($foods_one);
        }
    }
    foreach($foods_one as $food){
        echo $food . "<br>";
    }
    echo "<br>Food Items: " . count($foods_one) . "<br>";

    $capitals["USA"] = "Washington D.C.";
    $capitals["China"] = "Beijing";
    foreach(array_keys($capitals) as $key){
        echo "<br>Keys: {$key}";
    };
    echo "<br>";
    array_shift($capitals);
    $capitals["Capitals"] = "Countries";
    foreach(array_values($capitals) as $value){
        echo "<br>Values: {$value}";
    };
    echo "<br>";
    array_pop($capitals);
    foreach($capitals as $key => $value){
        echo "<br> The capital of {$key} is {$value}.";
    }
    echo "<br>";
    foreach(array_flip($capitals) as $key => $value){
        echo "<br>{$key} is the capital of {$value}.";
    }
    echo "<br>Current Country Count: " . count($capitals) . "<hr>";
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
                    <label>Enter a county:</label>
                    <input type="text" name="country">
                    <input type="submit" value="submit">
                </span>
            </div>
        </form>
    </body>
</html>
<?php
    $capitals = array(
        "Japan" => "Kyoto",
        "France" => "Paris",
        "India" => "New Delhi",
        "China" => "Beijing",
        "USA" => "Washington D.C.",
    );

    try {
        if(is_numeric($_POST["country"])){
            $capital = intval($_POST["country"]);
        } else {
            $capital = strtoupper($_POST["country"]);
        }
        $entered = null;
        switch ($capital){
            case 1:
            case "JAPAN":
                $entered = 0;
                break;
            case 2:
            case "FRANCE":
                $entered = 1;
                break;    
            case 3:
            case "INDIA":
                $entered = 2;
                break;
            case 4:
            case "CHINA":
                $entered = 3;
                break;
            case 5:

            case "USA":
                $entered = 4;
                break;
            default:
                throw new Exception("invalid option<br><br>");
        }
        echo "The capital of " . array_keys($capitals)[$entered] .  " is " . array_values($capitals)[$entered] . "<br><br>";
    } catch (Exception $e){
        echo "Exception: " . $e->getMessage();
    } finally {
        echo "Choice [1] Japan<br>";
        echo "Choice [2] France<br>";
        echo "Choice [3] India<br>";
        echo "Choice [4] China<br>";
        echo "Choice [5] USA<br><hr>";
    }
?>

<!------------------------------( Part Ten Comments Below )------------------------------
    _____________________________________________________________________________________

    isset();
    returns TRUE if a variable is declared and not null (this does not includes $string = ''; as null)

    empty();
    returns TRUE if a variable is not declared, false, or null, (this includes $string = ''; as null)
    _____________________________________________________________________________________

------------------------------( Part Ten Comments Above )------------------------------->

<?php
    $myString = '';

    if (isset($myString)){
        echo "the String is set.<br>";
    } else {
        echo "the String is NOT set.<br>";
    }

    if(empty($myString)){
        echo "the String is empty.<br>";
    } else {
        echo "the String is NOT empty.<br>";
    }
    echo "<hr>";

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
                <input type="submit" name="login" value="login">
            </div>
        </form>
    </body>
</html>
<?php
    if(isset($_POST["login"])){
        if(!empty($_POST["username"]) && !empty($_POST["password"])){
            foreach($_POST as $key => $value){
                echo "{$key}: {$value}<br>";
            }
        } else {
            echo "you tried logging in.<br>";
            if(empty($_POST["username"])){
                echo "username is missing.<br>";
            }
            if(empty($_POST["password"])){
                echo "password is missing.<br>";
            }
            echo "login failed.<br>";
        }
    }
    echo "<hr>";
?>

<!------------------------------( Part Eleven Comments Below )------------------------------
    ________________________________________________________________________________________

    Radio Buttons
    ________________________________________________________________________________________

------------------------------( Part Eleven Comments Above )------------------------------->

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
        <div><br>
            <input type="radio" name="credit_card" value="Visa">Visa<br>
            <input type="radio" name="credit_card" value="Mastercard">Mastercard<br>
            <input type="radio" name="credit_card" value="American Express">American Express<br><br>
            <input type="submit" name="confirm" value="confirm">
        </div>
    </form>
</body>
</html>
<?php
    if (isset($_POST["confirm"]) && !empty($_POST["credit_card"])){
        echo "You selected the " . $_POST["credit_card"];
    } else {
        echo "Please select a card from the list above";
    }
    echo "<hr>";
?>

<!------------------------------( Part Twelve Comments Below )------------------------------
    ________________________________________________________________________________________

    Checkbox Buttons
    ________________________________________________________________________________________

------------------------------( Part Twelve Comments Above )------------------------------->

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
            <div><br>
                <input type="checkbox" name="pizza" value="Pizza">Pizza<br>
                <input type="checkbox" name="hamburger" value="Hamburger">Hamburger<br>
                <input type="checkbox" name="hotdog" value="Hotdog">Hotdog<br>
                <input type="checkbox" name="toco" value="Toco">Toco<br><br>
                <input type="submit" name="submit" value="submit">
            </div>
        </form>
    </body>
</html>
<?php
    $selection_count = false;
    if(isset($_POST["submit"])){
        foreach($_POST as $key => $value){
            if(isset($_POST[$key]) && $_POST[$key] != "submit"){
                echo "You selected the {$value} option.<br>";
                $selection_count = true;
            }
        }
        if ($selection_count == false){
            echo "Please make your choice.<br>";
        }
    }
    echo "<hr>";
?>

<!------------------------------( Part Thirteen Comments Below )------------------------------
    __________________________________________________________________________________________

    Functions
    write some code once, reuse when you need it
    type () after function to invoke type nothing after to callback
    ex. add() subtract() multiply() divide()
    __________________________________________________________________________________________

------------------------------( Part Thirteen Comments Above )------------------------------->

<?php

    function is_even(int $number){
        return $number % 2 ? "{$number} is Odd<br>" : "{$number} is Even<br>";
    }

    echo is_even(3);
    echo is_even(4);

    function hypotenuese($a,$b){
        try{
            if (is_numeric($a) && is_numeric($b)){
                return "a: {$a}<br>b: {$b}<br>c: " . round(sqrt(pow($a,2) + pow($b,2)),3) . "<br>";
            } else {
                throw new Exception('Invalid input detected');
            }
        } catch (Exception $e){
            return "Caught Exception:" . $e->getMessage();
        }
    }
    echo hypotenuese(3,5);
    echo hypotenuese(3,'cookie');
    echo "<hr>"
?>


<!------------------------------( Part Fifteen Comments Below )------------------------------
    _________________________________________________________________________________________

    String Functions
    _________________________________________________________________________________________

------------------------------( Part Fifteen Comments Above )------------------------------->
<?php
    $username = "Canine Table<br>";
    $phone_number = "123-456-7890<br>";
    echo strtoupper($username);
    echo strtolower($username);
    echo str_repeat(strtoupper($username),3);
    echo str_replace('-',":",$phone_number);
    echo str_shuffle(str_replace("<br>","",$username)) . "<br>";
    echo trim($username);
    echo strrev(str_repeat(str_replace("<br>","",$username),4)) . "<br>";
    echo str_pad(str_replace("<br>","",$username),38,"/") . "<br>";
    echo "Boolean String Compare: " . strcmp($username,$username) . "<br>";
    echo "String Length: " . strlen($username) ."<br>";
    echo "First Space Character Position: " . strpos($username," ") . "<br>";
    echo 'Sub String: ' . substr($username,0,6) . "<br>";
    echo 'Sub String: ' . substr($username,7);
    print_r(explode(" ",$username));
    echo implode('-(imploded)-',explode(" ",$username));
    echo "<hr>";
?>

<!------------------------------( Part Sixteen Comments Below )------------------------------
    _________________________________________________________________________________________

    Sanitize and Validate Input
    _________________________________________________________________________________________

------------------------------( Part Sixteen Comments Above )------------------------------->


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
            <div><br>
                <label>Username:</label>
                <input type="text" name="user_input">
            </div>
            <div><br>
                <label>Age:</label>
                <input type="text" name="age_input">
            </div>
            <div><br>
                <label>Email:</label>
                <input type="text" name="email_input">
            </div>
            <div><br>
                <label>Validate:</label>
                <input type="text" name="validate_input">
            </div>
            <div><br>
                <input type="submit" name="login" value="login">
            </div><br>
        </form>
    </body>
</html>
<?php
    if(isset($_POST["login"]) && !empty($_POST["user_input"]) || !empty($_POST["age_input"]) || !empty($_POST["email_input"]) || !empty(filter_input(INPUT_POST,"validate_input",FILTER_VALIDATE_INT))){
        $username = filter_input(INPUT_POST,"user_input",FILTER_SANITIZE_SPECIAL_CHARS);
        $age = filter_input(INPUT_POST,"age_input",FILTER_SANITIZE_NUMBER_INT);
        $email = filter_input(INPUT_POST,"email_input",FILTER_SANITIZE_EMAIL);
        $validate = filter_input(INPUT_POST,"validate_input",FILTER_VALIDATE_INT);
        echo "Your username is {$username}<br>";
        echo "Your age is {$age}<br>";
        echo "Your email is {$email}<br>";
        if(!empty($validate)){
            echo "Your entry is {$validate}<br>";
        } else {
            echo "Invalid entry<br>";
        }
    } else {
        echo "Please enter your inputs" . "<br>";
    }
    echo "<hr>";
?>


<!------------------------------( Part Seventeen Comments Below )------------------------------
    ___________________________________________________________________________________________

    Include Function
    include()
    copies the content of a file (php/html/text)
    and includes it in your php file.
    sections of our website become reusable.
    changes only needed to be made in one place.
    ___________________________________________________________________________________________

------------------------------( Part Seventeen Comments Above )------------------------------->

<?php
    include("lib/header.html");
    include("lib/footer.html");
?>

<!------------------------------( Part Eighteen Comments Below )------------------------------
    __________________________________________________________________________________________

    Cookies
    Information about a user stored in a user's webrowser
    targeted advertisements, browsing preferences, and other
    non-sensitive data
    __________________________________________________________________________________________

------------------------------( Part Eighteen Comments Above )------------------------------->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <a href="/php/website/lib/cookies.php">Cookies Here</a><hr>
    </body>
</html>


<!------------------------------( Part Fifteen Comments Below )------------------------------
    _________________________________________________________________________________________

    Sessions
    SGB used to store information on a user to be used across mutiple pages.
    A user is assigned a session-id ex, login credentials.
    _________________________________________________________________________________________

------------------------------( Part Fifteen Comments Above )------------------------------->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <a href="/php/website/lib/login.php">Login Here</a><hr>
    </body>
</html>

<!------------------------------( Part Fifteen Comments Below )------------------------------
    _________________________________________________________________________________________

    $_SERVER
    SGB that contains headers, paths, and script locations
    the entries in this array are created by the web server
    shows nearly everything you need to know about the current web page env.
    _________________________________________________________________________________________

------------------------------( Part Fifteen Comments Above )------------------------------->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <a href="/php/website/lib/server.php">Server Here</a><hr>
    </body>
</html>

<!------------------------------( Part Fifteen Comments Below )------------------------------
    _________________________________________________________________________________________

    Hashing
    transforming sensitive data (passwords) into letters, numbers, and/or symbols
    via a mathematical process. (similar to encryption)
    hides the original data from 3rd parties
    _________________________________________________________________________________________

------------------------------( Part Fifteen Comments Above )------------------------------->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <a href="/php/website/lib/hashing.php">Hashing Here</a><hr>
    </body>
</html>

<!------------------------------( Part Fifteen Comments Below )------------------------------
    _________________________________________________________________________________________

    1.) mySQLi Extention
    2.) PDO (PHP Data Objects)
    _________________________________________________________________________________________

------------------------------( Part Fifteen Comments Above )------------------------------->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <a href="/php/website/lib/mySQL.php">my SQL Server Here</a><hr>
    </body>
</html>

<!------------------------------( Part Fifteen Comments Below )------------------------------
    _________________________________________________________________________________________

    _________________________________________________________________________________________

------------------------------( Part Fifteen Comments Above )------------------------------->








<!------------------------------( Part Fifteen Comments Below )------------------------------
    _________________________________________________________________________________________

    _________________________________________________________________________________________

------------------------------( Part Fifteen Comments Above )------------------------------->