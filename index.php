<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="styles.css">
</head>
		<body>
			<div>
				<center>
				<table width = "100%" border="0" height = "60px" style = "background-color:rgba(0,0,0, 0.3)">
					<tr>
						<th width = "15%" align = "right"><a href="http://www.solarcity.com/" target="_self"><img src="images/solarcitylogo.png" class = "header_image"></img></a></th>
					 	<th width = "18"%><th>
					 	<th width = "67%" align = "left" class = "header_text">INTEREST FORM</th>
					 </tr>
				 </table>
				</center>
			</div>
			<form action = "process.php" method="post">
				<label>Username </label><input type="text" name="username"/>
				<br>
				<label>Password </label><input type="password" name="password"/>
				<br>
				<label>Name </label><input type="text" name="name"/>
				<br>
				<label>Age </label><input type="number" name="age" min="0" max = "100"/>
				<br>
				<br>
				<label>Address Line 1 </label><input type="text" name="address1"/> <!-- Street address, P.O. box, company name, c/o,   <div class="submissionfield"-->
				<br>
				<label>Address Line 2 </label><input type="text" name="address2"/> <!-- Apartment, suite, unit, building, floor, etc.,     <div class="submissionbutton" -->
				<br>
				<label>City <label/><input type="text" name="city"/>
				<br>
				<label>State/Province/Region <label/><input type="text" name="region"/>	
				<br>
				<label>Country <label/><input type="text" name="country"/>
				<br>
				<br>
				<label>Why you are interested in solar: <label/><input type="text" name="interest">
				<br>
				<input type="submit" name="submit" class = "submitform">
			</form>
		</body>
</html>