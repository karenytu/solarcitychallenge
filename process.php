<!DOCTYPE html>
<html>
	<body>
	<label>TEST</label>
	</body>
</html>

 <?php
	$resource =  pg_connect(getenv('DATABASE_URL')); // postgres://zbvkfthmvsspzz:c57aa9f724109cc6ad419575424b765a10ee05205091f8048ad24c607545b3c8@ec2-23-21-186-138.compute-1.amazonaws.com:5432/d5arjtlq5lmgqh
	$result = pg_query($resource, "IF OBJECT_ID('users') IS NULL");


	echo 'table exists!!!!!';
	//insert a row..
	$insertrow = pg_query($resource, "insert into users values('un2', 'pw2', 'name2', '2', 'address2', 'interest2');");
	if($insertrow) {
		echo 'information entered successfully!';
	}

	// $table = pg_query($resource, "SELECT * from users;");
	// for($ri = 0; $ri < $numrows; $ri++) {
 //    	echo "<tr>\n";
 //    	$row = pg_fetch_array($result, $ri);
 //    	echo $row["NAME"];
 //    			// <td>", $row["lname"], "</td>
 //   				// <td>", $row["id"], "</td></tr>";
 //   }

?>
