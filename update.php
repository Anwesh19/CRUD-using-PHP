<?php
  include "config.php";

  if(isset($_POST['update'])){
    $user_Id = $_GET['Id'];
	$Firstname = $_POST['Firstname'];
  	$Surname = $_POST['Surname'];
	$Age = $_POST['Age'];
	$Gender = $_POST['Gender'];
  	$Email = $_POST['Email'];
  	$Contact = $_POST['Contact'];
  	$Others = $_POST['Others'];
  
  	$sql = "UPDATE `Details` 
	  		SET `Firstname` = '$Firstname', `Surname`='$Surname', `email`='$email', `Age`='$Age',`Gender`='$Gender',`Email`='$Email',`Contact`='$Contact',`Others`='$Others'
			WHERE `Id` ='$user_Id'";
	$result= mysqli_query($conn, $sql);
  //$result = $conn->query($sql);

  	if($result == TRUE) {
  		echo "Record Updated Successfully";
  	}
  	else {
  		echo"Error:" . $sql . "<br>" .$conn->error;
  	}
}
  if(isset($_GET['Id'])) {
  	$user_Id = $_GET['Id'];

  	$sql = "SELECT *FROM `Details` WHERE `Id`='$user_Id'";

  	$result = $conn->query($sql);

  	if($result->num_rows > 0) {
  		while($row = $result->fetch_assoc()) {
		//while($row = mysqli_fetch_assoc($result)){
  			$First_name = $row['Firstname'];
  			$Surname = $row['Surname'];
			$Age = $row['Age'];
			$Gender = $row['Gender'];
  			$Email = $row['Email'];
			$Contact = $row['Contact'];
  			$Others = $row['Others'];
  			$Id = $row['Id'];
  		}
  		?>
  		<h2>UPDATE</h2>
  		<form action="" method="POST">
  			<fieldset>
  				<legend>Personal information:</legend>
  				Firstname:<br>
  				<input type="text" name="Firstname" value="<?php echo $First_name; ?>">
  				<input type="hidden" name="user_Id" value="<?php echo $Id; ?>">
  				<br>
  				Surname:<br>
  				<input type="text" name="Surname" value="<?php echo $Surname; ?>">
  				<br>
				Age:<br>
				<input type="text" name="Age" value="<?php echo $Age; ?>">
  				<br> 
				Gender:<br>
				<input type="text" name="Gender" value="<?php echo $Gender; ?>">
  				<br>
  				Email:<br>
  				<input type="text" name="email" value="<?php echo $Email; ?>">
  				<br>
  				Contact:<br>
  				<input type="tel" name="Contact" value="<?php echo $Contact; ?>">
  				<br>
  				Others:<br>
				<textarea  name="Others" rows="4" cols="50" placeholder="Tell us about Youself" value="<?php echo $Others; ?>"></textarea>
				<br><br>
  				
  				<input type="submit" value="update" name="update">
  			</fieldset>
  		</form>

  	</body>
  	</html>

  	<?php
  } else{
  	// if the 'Id' value is not valid, redirect the user back to view.php page
  	header('Location: view.php');

  }
}
?>














