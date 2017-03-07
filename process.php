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
		$tablecreated = pg_query($resource, "CREATE TABLE users(NAME TEXT);"); // goes here, but does not succesfully make a table?
		echo $tablecreated ? 'true' : 'false';
	} else{
		echo 'table exists!!!!!';
		// number of rows in table???
	}

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
