<?php

$hostname = "localhost";
$dbname = 'test';
$dbuser = "root";
$dbpass = "";


// STEP TWO : connecting to the database
$db = new mysqli($hostname, $dbuser, $dbpass, $dbname);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
  }

if(isset($_POST["submit"]))
{

    $class =$_POST["class"];

    $sql = "INSERT INTO class (class) VALUES ('$class')";
    mysqli_query($db, $sql);
    $class = mysqli_insert_id($db);

    for ($a = 0; $a < count($_POST["studentName"]); $a++)
    {
        $sql ="INSERT INTO student (name, email, class, cohort)
        VALUES ('" .$_POST["studentName"][$a] ."',
        '" .$_POST["studentEmail"][$a] ."',
            '$class',
        '" .$_POST["studentCohort"][$a] ."',)";
        mysqli_query($db, $sql);
    }

    echo "<p>Class has been added</p>";
}

?>

<!DOCTYPE html>
<html lang="en">
    <form method="POST" action="index.php">
    <input name="class" placeholder="Add a class" required>
    <br></br>

        <table style=centre>
            <tr>
                <th>Student name</th>
                <th>Student email</th>
                <th>cohort</th>
                <th></th>
            </tr>

        <tbody id="tbody"></tbody>
        </table>

        <p>
            <button type="button" onclick="addStudent();">
                Add Student        
            </button>
        </p>
        <p>
            <input type="submit" name="submit">
        </p>
    </form>

    <script>
        var Student = 0;

        function addStudent(){
            Student++;

            var html = "<tr>";
                html += "<td><input name='studentName[]' required></td>";
                html += "<td><input name='studentEmail[]' required></td>";
                html += "<td><input name='studentCohort[]' required></td>";
                html += "<td><button type='button' onclick='deleteRow(this);'>Remove</button></td>";
            html +="</tr>";

            document.getElementById("tbody").insertRow().innerHTML = html;
        }
        function deleteRow(self) {
            self.parentElement.parentElement.remove();
        }     
    </script>


    <Style>
    table {
        counter-reset: rowNumber;
        border: 1px solid black;
        border-collapse: collapse;
        }

    table tr::before {
        display: table-cell;
        counter-increment: rowNumber;
        content: counter(rowNumber) ".";
        padding-right: 0.3em;
        text-align: right;
    }
    </Style>

</html>