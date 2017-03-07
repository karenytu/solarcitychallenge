<!DOCTYPE html>
<html>
	<body>
	<label>TEST</label>
	</body>
</html>

 <?php
	$resource =  pg_connect(getenv('DATABASE_URL')); // postgres://zbvkfthmvsspzz:c57aa9f724109cc6ad419575424b765a10ee05205091f8048ad24c607545b3c8@ec2-23-21-186-138.compute-1.amazonaws.com:5432/d5arjtlq5lmgqh
	$result = pg_query($resource, "IF OBJECT_ID('users') IS NULL");
	$table = pg_query($resource, "select * from users;");

	if (!empty($_POST["username"]) && !empty($_POST["password"]) && !empty($_POST["name"]) && !empty($_POST["address1"]) &&
		!empty($_POST["city"]) && !empty($_POST["region"]) && !empty($_POST["country"]) &&
		!empty($_POST["interest"])) { //any missing information (only address2 excluded)

		if (!pg_query("select name from users where username = \'".$POST["username"]."\'")) { //username already exists
			echo 'username already exists, go back and choose a different one'; // make this into an html pop up or something
			echo "<html>
				<body>
					<label>username already exists</label>
				</body>
			</html>";
			// include a button to go back to the other page??
		} else {
			echo "<html>
				<body>
					<label>Everything entered as normally</label>
				</body>
			</html>";
			//insert the information into the database!
			//$rowtoinsert = $_POST["username"].$_POST["password"].$_POST["name"]

			//put all information into a string, then send to database
			// for the different fields of an address, serialize($value) to turn into a single string
			
			//$_POST["address1"]
			//$_POST["address2"]
		}
	} else {
		echo"<html>
			<body>
				<label>Missing information.</label>
			</body>
		</html>";
		// include a button to go back to the other page??
		// prompt the user to go back a page, re-try entering information
	}

	// $insertrow = pg_query($resource, "insert into users values('un3', 'pw3', 'name3', '3', 'address3', 'interest3');");
	// if($insertrow) {
	// 	echo 'information entered successfully!';
	// }

?>
