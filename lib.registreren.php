<?php
	include("inc.homebutton.php");
	include("inc.footer.php");
?>	
<div id="register" class="animate form">
			<form  method= "post" action="lib.verwerken.php" autocomplete="on"> 
				<h1> Registeren </h1> 
				<p>
					<label for="frstnamesignup" class="youfrstname" data-icon="e">Voornaam</label>
					<input id="frstnamesignup" name="frstnamesignup" required="required" placeholder="First Name"/>
				</p>
				<p>
					<label for="lstnamesignup" class="youlstname" data-icon="n">Achternaam</label>
					<input id="lstnamesignup" name="lstnamesignup" required="required" placeholder="Last Name"/>
				</p>
				<p> 
					<label for="emailsignup" class="youmail" data-icon="e" >E-mailadres</label>
					<input id="emailsignup" name="emailsignup" required="required" type="email" placeholder="Someone@hotmail.com"/> 
				</p>
				<p> 
					<label for="passwordsignup" class="youpasswd" data-icon="p">Wachtwoord</label>
					<input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="password"/>
				</p>
				<p> 
					<label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Herhaal Wachtwoord</label>
					<input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="password"/>
				</p>
				
				<p> 
					<label for="phonenmbrsignup" class="youphonenmbr" data-icon="n">Telefoonnummer</label>
					<input id="phonenmbrsignup" class="phonenmbrsignup" min="8" max="16" required="required" placeholder="Phone Number"/>
				</p>
				<p class="signin button"> 
					<input type="submit" value="Registreren"/> 
				</p>
				<p class="change_link">  
					Al een account?
					<a href="lib.inloggen.php" class="to_register">Login</a>
				</p>
			</form>
		</div>