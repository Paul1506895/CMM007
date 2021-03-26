<?php

$hostname = 'localhost';
$dbname = 'test';
$dbuser = 'root';
$dbpass = 'root';


// STEP TWO : connecting to the database
$link = new mysqli($hostname, $dbuser, $dbpass, $dbname);

// Check connection
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
  }

if(isset($_POST["submit"]))
{

    $class =$_POST["class"];

    $sql = "INSERT INTO class (class) VALUES ('$class')";
    mysqli_query($link, $sql);
    $class = mysqli_insert_id($link);

    for ($a = 0; $a < count($_POST["studentName"]); $a++)
    {
        $sql ="INSERT INTO student (name, email, class, cohort)
        VALUES ('" .$_POST["studentName"][$a] ."',
        '" .$_POST["studentEmail"][$a] ."',
            '$class',
        '" .$_POST["studentCohort"][$a] ."',)";
        mysqli_query($link, $sql);
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