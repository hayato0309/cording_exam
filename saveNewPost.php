<?php
include 'dbconnect.php';

$title = $_POST["title"];
$content = $_POST["content"];
// var_dump($title);
// var_dump($content);

$sql = "INSERT INTO topic(Title, Content, Created_at) VALUES ('$title', '$content', cast(now() as date))";

if($conn->query($sql) === true){
	echo "Your topic was registered succesfully";
	echo "<a href='toppage.php'>back to toppage</a>";
}else {
	echo "Error during registration" . $conn->error;
}
?>