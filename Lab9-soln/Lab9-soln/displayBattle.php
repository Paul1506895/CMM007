<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>superhero system</title>

</head>
<body>
<header>
    <h1>superheros System</h1>
    <h2>display all battles </h2>
</header>
<main>
    <?php

    include("dbConnect.php");

    if(isset($_GET['id'])){
        echo "here a";
        $superheroID=$_GET['id'];
        $sql = "SELECT * FROM superherobattles where superheroID = $superheroID";
    }
    else{
echo "here b";
        $sql = "SELECT * FROM superherobattles";

    }


    $result = $db->query($sql);

    while($row = $result->fetch_array()){

        $firstname=$row['firstname'];
        $lastname=$row['lastname'];
        $mainSuperpower=$row['mainSuperPower'];
        $villanFought=$row['villanFought'];

        echo "<article> 
             <p>This superheros known as <strong>{$firstname} {$lastname}</strong> recently fought <strong>{$villanFought}</strong> using <strong>{$mainSuperpower}</strong></p>
            </article>";
    }
    ?>

</main>
</body>
</html>