<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Users List</title>
</head>
<body>
	<h1>Users List</h1>
	<table border="1">
		<thead>
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Profile Picture</th>
			</tr>
		</thead>
		<tbody>
			<?php 
           $file = fopen("users.csv", "r");
           while(($data = fgetcsv($file)) != false)
           { ?>
				<tr>
					<td><?= $data[0] ?></td>
					<td><?= $data[1] ?></td>
					<td><img src="<?= 'uploads/'.$data[2] ?>" width="100"></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>
