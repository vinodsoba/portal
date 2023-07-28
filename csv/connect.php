<?php

function OpenCon(){
    $servername = "localhost";
    $username = "vinnie";
    $password = "Ub12fju10?";
    $dbname1 = "portal2";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname1", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

    return $conn;
}

function CloseCon($conn)
 {
 $conn->close();
 }


 ?>


