<?php
//including the database connection file

include include "mysqli_connect_amended.php"; 

if(isset($_POST['Submit'])) {	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	
	$bandName = mysqli_real_escape_string($mysqli, $_POST['bandName']);
	$album = mysqli_real_escape_string($mysqli, $_POST['album']);
	$genre = mysqli_real_escape_string($mysqli, $_POST['genre']);
	$yearReleased = mysqli_real_escape_string($mysqli, $_POST['yearReleased']);	
	
	// checking empty fields
	if(empty($bandName) || empty($album) || empty($genre) || empty($yearReleased)) {	
			
		if(empty($bandName)) {
			echo "<font color='red'>Band Name field is empty.</font><br/>";
		}
		
		if(empty($album)) {
			echo "<font color='red'>Album field is empty.</font><br/>";
		}
		
		if(empty($genre)) {
			echo "<font color='red'>Genre field is empty.</font><br/>";
		}	
		if(empty($yearReleased)) {
			echo "<font color='red'>Year Released field is empty.</font><br/>";
		}	
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO musicCollection(bandName,album,genre,yearReleased) VALUES('$bandName','$album','$genre',$yearReleased)");
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		header("Location: database.php");
	}
}
?>