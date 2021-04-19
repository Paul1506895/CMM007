<?php
$server = 'localhost';
$username = "";
$password = "";
$database = "test";


$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
</html>
<body>
<?php
$sql = "SELECT * FROM data";
$result = mysqli_query($conn, $sql);
$datas = array();
if (mysqli_num_rows($result) > 0 ){
    while($row = mysqli_fetch_assoc($result)){
        $datas[] = $row;
    }
}

?>
</body>
</html>