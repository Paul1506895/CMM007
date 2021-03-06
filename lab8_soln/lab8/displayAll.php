<?php
/**
 * Created by PhpStorm.
 * User: Stewart
 * Date: 23/03/2018
 * Time: 08:30
 */

include ("dbConnect.php");

$sql = "SELECT * FROM marvelmovies";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "year: ". $row["yearReleased"]. "; title: " . $row["title"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();


?>