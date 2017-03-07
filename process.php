<!DOCTYPE html>
<html>
	<body>
	<label>TEST</label>
	</body>
</html>

 <?php
	$resource =  pg_connect(getenv('DATABASE_URL'));
	echo 'test';
	$name = pg_dbname(); //definitely returned some random string!
	echo 'test 2';
	$result = pg_query($resource, "IF OBJECT_ID('users') IS NULL");
	$numtables = pg_query($resource, "select count(*) from information_schema.tables");
	echo $numtables ? 'true' : 'false';
	// echo 4;
	if ($result) {
		echo 'table does not exist';
		$tablecreated = pg_query($resource, "CREATE TABLE users(NAME TEXT);");
	} else{
		echo 'table exists!!!!!';
		$table = pg_query($resource, "SELECT * from users;");
		$row = pg_fetch_row($resource, 0);
		var_dump(pg_num_rows($table));
		// $numrows = pg_query($resource, "SELECT COUNT(*) FROM users;");
		// echo $numrows;
		//insert a row..
		// number of rows in table???
	}

	// $table = pg_query($resource, "SELECT * from users;");
	// for($ri = 0; $ri < $numrows; $ri++) {
 //    	echo "<tr>\n";
 //    	$row = pg_fetch_array($result, $ri);
 //    	echo $row["NAME"];
 //    			// <td>", $row["lname"], "</td>
 //   				// <td>", $row["id"], "</td></tr>";
 //   }

	$result2 = pg_query($resource, "IF OBJECT_ID('users') IS NULL");
	if ($result2) {
		echo 'table NOT created';
	}
	echo 'test 3';
	// $result2 = pg_query($resource, "IF OBJECT_ID('users') IS NULL");
	// if (!$result2) {
	// 	echo 'table does not exist';
	// }
	// echo 'test 4';
	// if(pg_query($resource, 'IF OBJECT_ID(\'users\') IS NULL') {
	// 	pg_query($resource, 'CREATE TABLE users(NAME TEXT)');
	// 	echo 'table created';
	// } else {
	// 	echo 'table already exists';
	// }
	// pg_copy_from($resource, 'users', $rows);
	// $numrows = pg_num_rows(resource, "select * from users"); //users is the name of a table
	// $required = array('name'); implement later...https://stackoverflow.com/questions/3190464/php-check-if-any-posted-vars-are-empty-form-all-fields-required
	// echo $_POST["name"];
	// if(empty($POST)) {
	// 	echo 'empty';
	// } else {
	// 	echo 'filled';
	// }
?>
