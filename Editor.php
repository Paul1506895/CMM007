<?php 
// STEP ONE
// // database credentials
$hostname = 'localhost';
$dbname = 'databse_name';
$dbuser = 'user_name';
$dbpass = 'user_password';


// STEP TWO : connecting to the database
$mysqli = new mysqli($hostname, $dbuser, $dbpass, $dbname);

// STEP THREE : SQL query
$bicycles = $mysqli->query('SELECT * FROM bicycles');

 ?>

// STEP FOUR : Displaying table values through HTML Table
<table> 
<thead>
	<tr>
	 <th>ID</th>
	 <th>Brand</th>
         <th>Model</th>
	 <th>Year</th>
         <th>Category</th>
	 <th>Gender</th>
	 <th>Color</th>
         <th>Weight KG</th>
	</tr>
</thead>

<tbody>
       <tr>
	 <?php foreach ($bicycles as $bicycle){ ?>
	 <td> <?php echo $bicycle['id']; ?> </td>
	 <td> <?php echo $bicycle['brand']; ?> </td>
	 <td> <?php echo $bicycle['model']; ?> </td>
	 <td> <?php echo $bicycle['year']; ?> </td>
	 <td> <?php echo $bicycle['category']; ?> </td>
	 <td> <?php echo $bicycle['gender']; ?> </td>
	 <td> <?php echo $bicycle['color']; ?> </td>
	 <td> <?php echo $bicycle['weight_kg']; ?> </td> 
      </tr>
	<?php } ?>
</tbody>
</table>