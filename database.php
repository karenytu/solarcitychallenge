<html>
	<body>
		<?php
			$resource =  pg_connect(getenv('DATABASE_URL'));
			$table = pg_query($resource, "select * from users;");
			
			echo "<table>"; // start table in html, determine style in a css file!!!!
			echo "<tr><td>username</td><td>password</td><td>name</td><td>age</td><td>address</td><td>interest</td></tr>";
			while($row = pg_fetch_array($table)) {
				echo str_replace("\\n", "<br>", "<tr><td>".$row['username']."</td><td>".$row['password']."</td><td>".$row['name']."</td><td>".$row['age']."</td><td>".$row['address']."</td><td>".$row['interest']."</td></tr>");
			}
			echo "</table>"; // needed to close the table in html
			pg_close();
		?>
	</body>
</html>