<?php include 'connect.php';
$users_sql="SELECT * FROM `users`";
$query=mysql_query($users_sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Array</title>
	<meta charset="utf-8">
</head>
<body>
<form method="POST">
	<fieldset>
	<?php
		if (isset($_POST['name']) && isset($_POST['pass'])) {
			$name=$_POST['name'];
			$pass=$_POST['pass'];
		 	if (!empty($name) && !empty($pass)) {
		 		if (mysql_num_rows($query)) {
		 				while ($row=mysql_fetch_array($query, MYSQL_ASSOC)) {
		 				 	 $id=$row['id'];
							 $user=$row['User_Name'];
							 $password=$row['Password'];
							 if ($name==$user&&$pass==$password) {
								echo $id."<br>";
							 	echo $user."<br>";
								echo $password."<br>";
							}
		 				}
		 			}
		 	}else{
		 		echo "<p>შეავსეთ ყველა ველი!!!</p>";
		 	}
		 }
?>
	<input type="text" id="name" name="name"><br><br>
	<input type="password" id="pass" name="pass"><br><br>
	<input type="submit" value="Send">
	</fieldset>
</form>
</body>
</html>


<!-- https://www.youtube.com/watch?v=IYmJeri6r0Y -->
