<!-- <html>
		<body>
		<label>x</label>
	</body>
</html> -->

<?php
	$resource =  pg_connect(getenv('DATABASE_URL')); // postgres://zbvkfthmvsspzz:c57aa9f724109cc6ad419575424b765a10ee05205091f8048ad24c607545b3c8@ec2-23-21-186-138.compute-1.amazonaws.com:5432/d5arjtlq5lmgqh
	$result = pg_query($resource, "IF OBJECT_ID('users') IS NULL");
	$table = pg_query($resource, "select * from users;");

	if (!empty($_POST["username"]) && !empty($_POST["password"]) && !empty($_POST["age"]) && !empty($_POST["name"]) && !empty($_POST["address1"]) &&
		!empty($_POST["city"]) && !empty($_POST["region"]) && !empty($_POST["country"]) &&
		!empty($_POST["interest"])) {

		if (!pg_query("if exists (select name from users where username = '".trim($POST["username"])."') then null")) { //username already exists
			require_once("usernameexists.html");
		} else {
			// landing page: you have been added to the mailing list to get any additional information! in the meantime, check out solarcity's website
			require_once("successful.html");
			// echo "<html>
			// 	<body>
			// 		<label>Everything entered as normally</label>
			// 	</body>
			// </html>";
			
			$serializedaddress = '';
			// for the different fields of an address, concatenate into a single string
			if (empty($_POST["address2"])) {
				$serializedaddress = trim($_POST["address1"])."\n".trim($_POST["city"])."\n".trim($_POST["region"])."\n".trim($_POST["country"]);
			} else {
				$serializedaddress = trim($_POST["address1"])."\n".trim($_POST["address2"])."\n".trim($_POST["city"])."\n".trim($_POST["region"])."\n".trim($_POST["country"]);
			}

			//put all information into a string, then send to database
			$rowtoinsert = "'".$_POST["username"]."','".$_POST["password"]."','".$_POST["name"]."',".$_POST["age"].",'".$serializedaddress."','".$_POST['interest']."'";


			$attempt = pg_query($resource, "insert into users values (".$rowtoinsert. ");");
			// if($attempt != null) {
			// 	echo 'success???';
			// } else {
			// 	echo 'did not insert';
			// }
		}
	} else {
		require_once("incompleteinfo.html");
		echo 'incomplete';
	}

?>
