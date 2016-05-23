<?php
require_once 'title_space.html';

?>


<div>
	<h2>Sign up!</h2>
	<form action = "hginsert.php" method ="post">
		<p>Firstname</p>
		<input  type = "text" name ="firstname"><br>
		<p>Lastname</p>
		<input type = "text" name ="lastname"><br>
		<p>Username</p>
		<input type = "text" name = "username"><br>
		<p>Password</p>
		<input id ="test" type ="text" name = "password"><br>
		<p>Confirm password</p>
		<input id ="test1" type = "text" name ="confirm"><br>
		<p>Email address</p>
		<input type ="text" name = "email"><br>
		<button id = "rest" class = "newbutton" type = "submit" 
		value ="Submit" onmouseover="myFunction2()" 
		onmouseout="myFunction3()">Register</button>

	</form>

</div>





</body>
</html>