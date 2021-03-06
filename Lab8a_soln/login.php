<?php

include ("db.php");


//$OK="no";


if(empty($_POST['username']) || empty($_POST['password'])){
    echo"both fields required. ";
}
//else echo $OK;

$username=$_POST["username"];
$password=$_POST["password"];

//$sql = "SELECT * FROM users WHERE username LIKE '$username' AND password LIKE '$password' ";
$sql = "SELECT * FROM users WHERE username ='$username' AND password ='$password' ";

//$result = $conn->query($sql);
$result = mysqli_query($db,$sql);

//if ($result->num_rows > 0) {
if (mysqli_num_rows($result)==1) {
    header("location: home.php");
}else {echo "incorrect username and password. ";
}



$db -> close();


?>