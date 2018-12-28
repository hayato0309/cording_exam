<?php
include 'dbconnect.php';
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../cording_exam/exam.css">
	<title>Bulletin Board</title>
</head>
<body>
	<h1>Bulletin Board</h1>
	<a class="create" href="create_post.php">+ Create new</a>

	<?php
	echo "<table class='table' border=1>
				<tr>
					<th>ID</th>
					<th>Title</th>
					<th>Content</th>
					<th>Created_at</th>
					<th>Action</th>
				</tr>";

	$sql = "SELECT * FROM topic";
	$result = $conn->query($sql);
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			$id = $row["ID"];
			$title = $row["Title"];
			$content = $row["Content"];
			$createdat = $row["Created_at"];

				echo "<tr>";
					echo "<td>$id</td>";
					echo "<form action='viewArticle.php' method='POST'>";
						echo "<td><input class='view_button' type='hidden' name='view' value='$id'>
								<input type='submit' value='$title'></td>";
						echo "<td>$content</td>";
					echo "</form>";
					echo "<td>$createdat</td>";
					echo "<form action='editArticle.php' method='POST'>";
						echo "<td><input type='hidden' name='edit' value='$id'>
								<input type='submit' value='Edit'></td>";
					echo "</form>";
					echo "<form action='deleteArticle.php' method='POST'>";
						echo "<td><input type='hidden' name='delete' value='$id'>
								<input type='submit' value='Delete'></td>";
					echo "</form>";
				echo "</tr>";
		}
	}
	echo "</table>";
	?>
</body>
</html>