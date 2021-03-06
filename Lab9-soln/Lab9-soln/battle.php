<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>superhero system</title>

</head>
<body>
<header>
    <h1>superheros System</h1>
    <h2>Record a Battle </h2>
    <p><a href="index.php">Return to Home</a></p>
</header>
<main>
    <form method="post" action="insertBattle.php">
        <p>select superhero that fought</p><select name="superhero">

    <?php

    include("dbConnect.php");
    $sql = "SELECT * FROM superheros";
    $result = $db->query($sql);

    while($row = $result->fetch_array()){

        $firstname=$row['firstName'];
        $lastname=$row['lastName'];
        $superheroID=$row['superheroID'];

        echo "<option value='{$superheroID}'>{$firstname} {$lastname}</option>";
    }
    ?>

        </select><br>
        <input type="text" name="villan" placeholder="Villan Fought"><br>
        <input type="submit" text="Record Battle">
    </form>

</main>
</body>
</html>