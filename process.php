<!DOCTYPE html>
<html>
	<body>
	<label>TEST</label>
	</body>
</html>

 <?php
	$resource =  pg_connect(getenv('DATABASE_URL'));
	echo $_POST["name"];
	if(empty($POST)) {
		echo 'empty';
	} else {
		echo 'filled';
	}
?>
