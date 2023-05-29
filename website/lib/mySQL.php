<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "businessdb";
    $connecting = "";

try {
    $connecting = mysqli_connect($db_server,$db_user,$db_pass,$db_name);

    } catch(mysqli_sql_exception){
        echo "you could not connect<br>";
    }

    if($connecting){
        echo "you are connected<br>";
    }
?>