<?php
$servername = "mysql.hostinger.nl";
$username = "u477410796_womba";
$password = "polio123";
$dbname = "u477410796_datab";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>
<html>
<body>

Beste <?php echo $_POST["frstnamesignup"]; ?> <?php echo $_POST["lstnamesignup"]; ?><br>
U heeft een bevestigingsmail ontvangen op <?php echo $_POST["emailsignup"]; ?><br>
Het wachtwoord waar u mee kan inloggen is: <?php echo $_POST["passwordsignup"]; ?>

</body>
</html>