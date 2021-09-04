<?php
include_once "mysqli_connect_amended.php";
if(isset($_POST['save']))
{	 
	 $bandName = $_POST['bandName'];
	 $album = $_POST['album'];
	 $genre = $_POST['genre'];
	 $yearReleased = $_POST['yearReleased'];
	 $sql = "INSERT INTO musicCollection (bandName,album,genre,yearReleased)
	 VALUES ('$bandName','$album','$genre','$yearReleased')";
	 if (mysqli_query($connection, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($connection);
	 }
	 mysqli_close($connection);
	 
	 header("location database.php");
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>