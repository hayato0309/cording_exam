<!DOCTYPE html>
<html>
<head>
	<title>Bulletin Board</title>
</head>
<body>
	<h1>Create new post</h1>
	<form action="saveNewPost.php" method="POST">
		<div>
			<div>Title</div>
			<input type="text" name="title" size="25" maxlength="255" required>
		</div>
		<div>
			<div>Content</div>
			<textarea name="content" maxlength="255"></textarea>
		</div>
			<input type="submit" name="post" value="Post">
	</form>
</body>
</html>