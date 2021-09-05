<?php
   include "config.php";

   $sql = "SELECT *FROM details";

   $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>VIEW</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" 
	integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <div class="cointainer">
    	<h2>details</h2>
    	<table class="table">
    		<head>
    			<tr>
    				<th>Id</th>
    				<th>First Name</th>
    				<th>Last Name</th>
    				<th>Age</th>
    				<th>Gender</th>
    				<th>Email</th>
					<th>Contact</th>
					<th>Others</th>
    			</tr>
    		</thread>
    	<tbody>
    	<?php
    	if($result->num_rows>0) {
    		while($row = $result->fetch_assoc()) {
    	
    		?>	
    	
    	    <tr>
    	    <td><?php echo $row['Id']; ?> </td>	
    	    <td><?php echo $row['Firstname']; ?> </td>	
    	    <td><?php echo $row['Surname']; ?> </td>	
    	    <td><?php echo $row['Age']; ?> </td>	
    	    <td><?php echo $row['Gender']; ?> </td>
			<td><?php echo $row['Email']; ?> </td>
			<td><?php echo $row['Contact']; ?> </td>
			<td><?php echo $row['Others']; ?> </td>
    	    <td><a class="btn btn-info" href="update.php?Id=<?php echo $row['Id']; ?>">Update</a>
			&nbsp;
			<a class="btn btn-danger" href="delete.php?Id=<?php echo $row['Id']; ?>">Delete</a>
			</td>
    	</tr>

    	<?php    }
}
?>

</tbody>
</table>
</div>
</body>
</html>