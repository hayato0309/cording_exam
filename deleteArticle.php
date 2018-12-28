<?php
include 'dbconnect.php';

$id = $_POST["delete"];

$sql = "DELETE FROM topic WHERE id = $id";

if($conn->query($sql) === TRUE){
    echo "<div class='success'>Your topic was deleted successfully.</div>";
}else{
    echo "<div class='error'>Error during deleting.</div>" . $conn->error;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="toppage.php">back to post top page</a>
</body>
</html>