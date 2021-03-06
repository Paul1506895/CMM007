<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>superhero system</title>

</head>
<body>
<header>
    <h1>superheros System</h1>
    <h2>display all superheros </h2>
</header>
<main>
    <?php

    include("dbConnect.php");



    $sql = "SELECT * FROM superheros";
    $result = $db->query($sql);

    while($row = $result->fetch_array()){

        $firstname=$row['firstName'];
        $lastname=$row['lastName'];
        $mainSuperpower=$row['mainSuperpower'];

        echo "<article> 
             <h3>{$firstname} {$lastname}</h3>
             <p>This superheros main power is <stong>{$mainSuperpower}</stong></p>
            </article>";
    }
    ?>

</main>
</body>
</html>