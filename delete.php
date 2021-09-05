<?php
   include "config.php";

   if(isset($_GET['Id'])) {
   	$user_Id = $_GET['Id'];

	$sql=" DELETE FROM `details` WHERE `details`.`Id` = '$user_Id'";

   	$result = $conn->query($sql);

   	if ($result == TRUE) {
   		echo"Record deleted successfully.";
   	}else{
   		echo "Error:" .$sql . "<br>" .$conn->error;
   	}
   }
   ?>
