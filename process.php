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
		!empty($_POST["interest"])) {

		if (pg_query("if exists (select name from users where username = \'".$POST["username"]."\') then null")) { //username already exists
			//"select name from users where username = \'".$POST["username"]."\'"
			//"if exists (select name from users where username = \'".$POST["username"]."\') then null"
			//var_dump(pg_query("if exists (select name from users where username = \'".$POST["username"]."\') then null"));
			echo 'username already exists, go back and choose a different one'; // make this into an html pop up or something
			echo "<html>
				<body>
					<label>username already exists</label>
				</body>
			</html>";
			// include a button to go back to the other page??
		} else { // landing page: you have been added to the mailing list to get any additional information! in the meantime, check out solarcity's website
			echo "<html>
				<body>
					<label>Everything entered as normally</label>
				</body>
			</html>";
			//insert the information into the database!
			
			// for the different fields of an address, concatenate into a single string
			if (empty($_POST["address2"])) {
				$serializedaddress = trim($_POST["address1"])."\n".trim($_POST["city"])."\n".trim($_POST["region"])."\n".trim($_POST["country"]);
			} else {
				$serializedaddress = trim($_POST["address1"])."\n".trim($_POST["address2"])."\n".trim($_POST["city"])."\n".trim($_POST["region"])."\n".trim($_POST["country"]);
			}
			//echo $serializedaddress;

			//put all information into a string, then send to database
			// $rowtoinsert = "'";
			$rowtoinsert = "'".$_POST["username"]."','".$_POST["password"]."','".$_POST["name"]."',".$POST_["age"].",'".$address."','"$_POST['interest']."'";
			// echo $rowtoinsert;
			$attempt = pg_query($resource, "insert into users values (".$rowtoinsert. ");");
			if($attempt != null) {
				echo 'success???';
			} else {
				echo 'did not insert';
			}
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
