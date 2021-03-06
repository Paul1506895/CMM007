<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>superhero system</title>

</head>
<body>
<header>
    <h1>superheros System</h1>
    <h2>superheros homepage</h2>
</header>
<p>what to do?</p>

<ul>
    <li><a href="superheroform.html">insert superheros</a></li>
    <li><a href="displaySuperheros.php ">display superheros</a></li>
    <li><a href="battle.php">insert battle</a></li>
    <li><a href="displayBattle.php">display all battles</a></li>
    <ul>

        <?php

        include("dbConnect.php");



        $sql = "SELECT * FROM superheros";
        $result = $db->query($sql);

        while($row = $result->fetch_array()){
           //echo " <li><a href='displayBattles.php?{id}'>display  battle</a></li>";
            $firstname=$row['firstName'];
          //echo $row['superheroID'];
        $lastname=$row['lastName'];
            $id=$row['superheroID'];
            echo "<li> <a href='displayBattle.php?id={$id}'>Battles for {$firstname} {$lastname}</a></li>";
        }


?>
    </ul>
</ul>
</body>
</html>
