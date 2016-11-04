<?php
	include("inc.footer.php");
?>
<html>
<head>
<title>Inlogpagina</title>
</head>

<body>
<a href="lib.home.php">
<img src="img/download.jpg" alt="This Image Sucks" width="150" height="150" border="0">

<div id="container_demo" >
	<a class="hiddenanchor" id="toregister"></a>
	<a class="hiddenanchor" id="tologin"></a>
	<div id="wrapper">
		<div id="login" class="animate form">
			<form  action="lib.validatie.php" autocomplete="on"> 
				<h1>Log in</h1> 
				<p> 
					<label for="email" class="email" data-icon="e" > E-mailadres </label>
					<input id="email" name="email" required="required" type="email" placeholder="E-mailadres"/>
				</p>
				<p> 
					<label for="password" class="form-control" data-icon="p"> Wachtwoord </label>
					<input id="password" name="password" required="required" type="password" placeholder="Wachtwoord" /> 
				</p>
				<p class="login button"> 
					<input type="submit" value="Login" /> 
				</p>
			</form>
		</div>

	
		
	</div>
</div>  

</body>

</html> 