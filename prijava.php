<?php include_once 'konfiguracija.php'; ?>
<?php

	session_start();
	
	if(isset($_SESSION['user_id']))
	{
		header("Location: http://localhost/Fitnes/index.php");
	}
	
	require 'konekcija.php';

	if(!empty($_POST['email']) && !empty($_POST['password'])):
	
		$records = $conn->prepare('SELECT id, email, password FROM clanovi WHERE email= :email');
		$records->bindParam(':email', $_POST['email']);
		$records->execute();
		$results = $records->fetch(PDO::FETCH_ASSOC);
		
		$message = '';
		
		if(count($results) > 0 && password_verify($_POST['password'], $results['password']))
		{
			$_SESSION['user_id'] = $results['id'];
			header("Location: http://localhost/Fitnes/index.php");
		}
		else 
		{
			$message = 'Ne odgovaraju podaci za prijavu.';
		}
		
	endif;	

?>

<!DOCTYPE html>
<html lang="hr">
  <head>
    <?php include_once 'predlozak/head.php'; ?>
  </head>

  <body>
	<?php include_once 'predlozak/izbornik.php'; ?>

  <div class="container">
  	
  	<?php if(!empty($message)): ?>
  		<p align="center"><?= $message ?></p>
  	<?php endif; ?>
  	
  	<h2 class="poravnavanje">Prijavite se:</h2>
  	<div class="poravnavanje">ili se <a href="registracija.php">registrirajte ovdje</a>.</div>
  	
	<form action="prijava.php" method="post">
		<input type="email"  placeholder="Upišite vaš email!" name="email"/>
		<input type="password" placeholder="Upišite password." name="password" />
		<input type="submit" value="Prijava" name="prijava">
	</form>
	
  </div>
    
    <?php include_once 'predlozak/skripte.php'; ?>
    
  </body>
</html>
