<?php

include("dbConnect.php");



$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$superpower = $_POST["superpower"];

echo $firstname.":".$lastname.":".$superpower;

$sql = "INSERT INTO superheros (firstName, lastName, mainSuperpower) VALUES ('$firstname', '$lastname', '$superpower')";


if(mysqli_query($db, $sql)){

    echo"ok";

}else {echo "error".$sql."<br>".mysqli_error($db);}

echo"yes";

header("location:index.php");

?>