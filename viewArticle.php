<?php
include 'dbconnect.php';

$id = $_POST["view"];

$sql = "SELECT * FROM topic WHERE ID = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$title = $row["Title"];
$content = $row["Content"];
$time = $row["Created_at"];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php echo "<h2>$title</h2>"?>
	<?php echo "<div>$time</div>"?>
	<?php echo "<div>$content</div>"?>
	<a href="toppage.php">back to top page</a>
</body>
</html>