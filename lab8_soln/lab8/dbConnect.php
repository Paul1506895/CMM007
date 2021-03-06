<?php
/**
 * Created by PhpStorm.
 * User: Stewart
 * Date: 23/03/2018
 * Time: 08:26
 */
$servername = "localhost";
$dbname='smdb';
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername,  $username, $password, $dbname);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


//echo "success";