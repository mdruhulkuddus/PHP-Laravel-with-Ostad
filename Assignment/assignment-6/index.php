<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	<form action="process.php" method="post" enctype="multipart/form-data">
		<label for="name">Name:</label>
		<input type="text" name="name" required><br><br>

		<label for="email">Email:</label>
		<input type="email" name="email" required><br><br>

		<label for="password">Password:</label>
		<input type="password" name="password" required><br><br>

		<label for="profile_pic">Profile Picture:</label>
		<input type="file" name="profile_pic" required><br><br>

		<input type="submit" value="Submit">
	</form>
</body>
</html>
