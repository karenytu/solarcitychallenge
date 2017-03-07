<!DOCTYPE html>
<html>
	<body>
	<label>TEST</label>
	</body>
</html>

 <?php
	$resource =  pg_connect(getenv('DATABASE_URL'));
	echo 'test';
	echo pg_dbname();
	echo 'test 2';
	$numrows = pg_num_rows(resource, "select * from users"); //users is the name of a table
	// $required = array('name'); implement later...https://stackoverflow.com/questions/3190464/php-check-if-any-posted-vars-are-empty-form-all-fields-required
	// echo $_POST["name"];
	// if(empty($POST)) {
	// 	echo 'empty';
	// } else {
	// 	echo 'filled';
	// }
?>
