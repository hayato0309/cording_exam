<?php
include 'dbconnect.php';

$id = $_POST["edit"];

$sql = "SELECT * FROM topic WHERE ID = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$title = $row["Title"];
$content = $row["Content"];
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../cording_exam/exam.css">
	<title></title>
</head>
<body>
	<form action="save_edittopic.php" method="POST">
		<h1>Edit post</h1>
		<div class="edit_title">
			<div>Title</div>
			<?php echo "<input type='text' name='title' value='$title' size='25'>" ?>
		</div>
		<div class="edit_content">
			<div>Content</div>
			<textarea name="content"><?php echo $content ?></textarea>
		</div>
		<?php echo "<input type='hidden' name='id' value= $id>" ?>
		<input type="submit" name="update" value="Update">
	</form>
</body>
</html>