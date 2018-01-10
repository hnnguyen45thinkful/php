<?php 
//Create Connection
$connect = mysqli_connect('localhost','root','','company');
//Check Connection
if(mysqli_connect_errno($connect)){
	echo "Failed to connect to database: ". mysqli_connect_error();
}

// mysqli_query($connect, "INSERT INTO employees (first_name, last_name, department, email)
// 	VALUES ('Jeff', 'Dole', 'Programming', 'jdole@gmail.com')");

$result = mysqli_query($connect, "SELECT * FROM employees");
?>

<!-- 
// while($row = mysqli_fetch_array($result)) {
// 	echo $row['first_name'].' ' .$row['last_name'].'<br />'; 
}
-->
<h1>Employees</h1>
	<table width="500" cellpadding=5 cellspacing=5 border=1>
		<tr>
			<th>ID#</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Dept</th>
			<th>Email</th>
		</tr>
<?php while($row = mysqli_fetch_array($result)): ?>
	<tr>
		<td><?php echo $row['id']; ?></td>
		<td><?php echo $row['first_name']; ?></td>
		<td><?php echo $row['last_name']; ?></td>
		<td><?php echo $row['department']; ?></td>
		<td><?php echo $row['email']; ?></td>
	</tr>
<?php endwhile; ?>
	</table>

<?php $result = mysqli_query($connect, "SELECT products.name, categories.name AS 'category',products.id AS prod_id FROM products LEFT JOIN categories ON products.category = categories.id");

 ?>

<h1>Products</h1>
<table width="500" cellpadding=5 cellspacing=5 border=1>
		<tr>
			<th>ID#</th>
			<th>Product</th>
			<th>Category</th>
		</tr>
<?php while($row = mysqli_fetch_array($result)): ?>
	<tr>
		<td><?php echo $row['prod_id']; ?></td>
		<td><?php echo $row['name']; ?></td>
		<td><?php echo $row['category']; ?></td>
	</tr>
<?php endwhile; ?>
	</table>

