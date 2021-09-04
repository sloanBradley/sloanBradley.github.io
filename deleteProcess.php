<?php
include_once 'database.php';
$sql = "DELETE FROM musicCollection WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($connection, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($connection);
}
mysqli_close($connection);

header("location database.php");
?>