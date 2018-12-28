<?php
include 'dbconnect.php';

$id = $_POST["id"];
// var_dump($commentId);
$title = $_POST["title"];
$content = $_POST["content"];
// var_dump($comment);

$sql = "UPDATE topic SET title = '$title', content = '$content' WHERE ID = $id";

if($conn->query($sql) === TRUE){
    echo "<div class='success'>Your information was updated successfully.</div>";
}else{
    echo "<div class='error'>Error during Updating.</div>" . $conn->error;
};
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="toppage.php">back to top page</a>
</body>
</html>