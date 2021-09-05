<?php
  include "config.php";

  if(isset($_POST['submit'])) {
  	$Firstname = $_POST['Firstname'];
  	$Surname = $_POST['Surname'];
	$Age = $_POST['Age'];
	$Gender = $_POST['Gender'];
  	$Email = $_POST['Email'];
  	$Contact = $_POST['Contact'];
  	$Others = $_POST['Others'];
  }

  $sql = "INSERT INTO `crud`.`Details` (`Firstname`,`Surname`,`Age`,`Gender`, `Email`, `Contact`, `Others`) VALUES ('','','','','', '','')";
 
  $result = $conn->query($sql);

  if($result == TRUE) {
  	echo "New record created successfully";
  }
  else {
  	echo "Error:" .$sql . "<br>" . $conn->error;
  }

  $conn->close();

 	
?>

<!DOCTYPE html>
<html>
<body>

	<h2> CREATE</h2>

	<form action="" method="POST">
		<fieldset>
			<h1> Personal Information:</h1>
			Firstname:<br>
			<input type="text" name="Firstname" required>
			<br>
			Surname:<br>
			<input type="text" name="Surname" required>
			<br>
			Age:<br>
			<input type="int" name="Age" required>
			<br>
            Gender:<br>
			<input type="text" name="Gender" placeholder="male/female" required>
			<br>
            Email:<br>
			 <input type="text" name="Email"required>
			 <br>
            Contact:<br>
			 <input type="tel" name="Contact"required>
			 <br>
            Others:<br>
			<textarea  name="Others" rows="4" cols="50" placeholder="Tell us about Youself"></textarea>
			<br><br>
			<input type="submit" name="submit" value="submit">
		</fieldset>
	</form>

</body>
</html>





