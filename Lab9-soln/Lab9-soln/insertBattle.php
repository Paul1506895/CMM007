<?php
/**
 * Created by PhpStorm.
 * User: Stewart
 * Date: 14/03/2017
 * Time: 11:35
 */


include("dbConnect.php");



$superheroID = $_POST["superhero"];
$villan = $_POST["villan"];

echo $superheroID.":".$villan ;

$sql = "INSERT INTO battles (superheroID,  villanFought) VALUES ('$superheroID', '$villan')";


if(mysqli_query($db, $sql)){

    echo"ok";

}else {echo "error".$sql."<br>".mysqli_error($db);}

echo"yes";

//header("location:output.php");


?>