<!DOCTYPE html>
<html>
	<body>

	<form action = "process.php" method="post"> <!-- Write css layout for a form!!!-- >
		Username <input type="text" name="username"/>
		<div>
			<label>Password </label>
			<input type="text" name="password">
		</div>
		<label>Name </label><input type="text" name="name"/>
		<br>
		<br>
		<label>Address Line 1 </label><input type="text" name="address1"/> <!-- Street address, P.O. box, company name, c/o,   <div class="submissionfield">-->
		<br>
		<label>Address Line 2 </label><input type="text" name="address2"/> <!-- Apartment, suite, unit, building, floor, etc.,     <div class="submissionbutton"> -->
		<br>
		<label>City <label/><input type="text" name="city"/>
		<br>
		<label>State/Province/Region <label/><input type="text" name="region"/>	
		<br>
		<label>Country <label/><input type="text" name="country"/>
		<br>
		<br>
		<label>Why you are interested in solar: <label/><input type="text" name="interest">
			<!-- .submissionfield { width: 90px; height: 390px; border: 1px solid #999999; padding: 5px; } for this one-->
		<br>
		<input type="submit" name="submit">
	</form>

	</body>
</html>

<!--?php  
	$resource =  pg_connect(getenv('DATABASE_URL'));
	REMOVED ANGLE BRACKETS>..this section of code is probably not
 ? -->