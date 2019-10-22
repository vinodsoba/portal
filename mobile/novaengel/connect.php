<?php
$servername = "127.0.0.1";
$username = "root";
$password = "mysql";
$dbname1 = "portal";
//include('simple_html_dom.php');

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
  