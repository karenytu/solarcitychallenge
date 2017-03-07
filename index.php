<!DOCTYPE html>
<html>
	<body>

	<form action = "#", method="post">
		<label>Name <label><input type="text" name="name">
		<br>
		<br>
		<label>Address Line 1</label><input type="text" name="address1"> <!-- Street address, P.O. box, company name, c/o,   <div class="submissionfield">-->
		<br>
		<label>Address Line 2<label><input type="text" name="address2"> <!-- Apartment, suite, unit, building, floor, etc.,     <div class="submissionbutton"> -->
		<br>
		<label>City <label><input type="text" name="city">
		<br>
		<label>State/Province/Region <label><input type="text" name="region">	
		<br>
		<label>Country <label><input type="text" name="country">
		<br>
		<br>
		<label>Why you are interested in solar: <label><input type="text" name="interest">
			<!-- .submissionfield { width: 90px; height: 390px; border: 1px solid #999999; padding: 5px; } for this one-->
		<br>
		<input type="submit" name="submit">
	</form>

	</body>
</html>

<?php  
	require 'vendor/autoload.php';
	$uri = 'mongodb://heroku_5kdpcthd:rggk6pekbv8ttf1f7g6ju7jp5u@ds121190.mlab.com:21190/heroku_5kdpcthd';
	// $uri = getenv('MONGODB_URI');
	echo 'Hello World 1';
	// if(!empty($_POST)){ //check if form was submitted
	// 	// $input = $_POST['inputText']; //get input text
	// 	echo 'Hello World 2';
	// 	echo "Success! You entered: ".$_POST['name'];//.$input;
	// }
	$client = new MongoDB\Client("mongodb://heroku_5kdpcthd:rggk6pekbv8ttf1f7g6ju7jp5u@ds121190.mlab.com:21190/heroku_5kdpcthd");
	
	try {
	    $connection = new Mongo($URI);
	    $database   = $connection->selectDB('heroku_5kdpcthd');
	    $collection = $database->selectCollection('Users');
	} catch(MongoConnectionException $e)
	{
	    die("Failed to connect to database ".$e->getMessage());
	}
 ?>