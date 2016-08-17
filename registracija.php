<?php include_once 'konfiguracija.php'; ?>
<?php
	
	session_start();
	
	if(isset($_SESSION['user_id']))
	{
		header("Location: index.php");
	}

	require 'konekcija.php';
	$message = '';

	if(!empty($_POST['ime']) && !empty($_POST['prezime']) && !empty($_POST['korisnicko_ime']) && !empty($_POST['email']) && !empty($_POST['password'])):
		
		// Enter the new user in the database
		$sql = "INSERT INTO clan (ime, prezime, email, korisnicko_ime, password) VALUES (:ime, :prezime, :email, :korisnicko_ime, :password)";
		$stmt = $conn->prepare($sql);
		$stmt->bindParam(':ime', $_POST['ime']);
		$stmt->bindParam(':prezime', $_POST['prezime']);
		$stmt->bindParam(':email', $_POST['email']);
		$stmt->bindParam(':korisnicko_ime', $_POST['korisnicko_ime']);
		$stmt->bindParam(':password', password_hash($_POST['password'], PASSWORD_BCRYPT));
		
		if( $stmt->execute() ):
			$message = 'Successfully created new user';
			header("Location: prijava.php");
		else:
			$message = 'Sorry there must have been an issue creating your account';
		endif;
		
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
	
  	<h2 class="poravnavanje">Registrirajte se:</h2>
  	<div class="poravnavanje">ili se <a href="prijava.php">prijavite ovdje</a>.</div>
	<form action="registracija.php" method="post">
		<fieldset>
			<label for="ime" class="lime">Ime:</label><input id="ime" type="text" placeholder="Upišite vaše ime!" name="ime"/>
			<label for="prezime" class="lprezime">Prezime:</label><input id="prezime" type="text" placeholder="Upišite vaše prezime!" name="prezime"/>
			<label for="email" class="lemail">Email:</label><input id="email" type="email" placeholder="Upišite vaš email!" name="email"/>
			<label for="korisnicko_ime" class="lkorisnik">Korisnicko ime:</label><input id="korisnicko_ime" type="text" placeholder="Upišite korisničko ime!" name="korisnicko_ime"/>
			<label for="password" class="lpassword">Password:</label><input id="password" type="password" placeholder="Upišite password." name="password" />
			<label for="potvrda_passworda" class="lpotvrda">Potvrdite password:</label><input id="potvrda_passworda" type="password" placeholder="Potvrdite password." name="potvrda_passworda" />
			<input type="submit" name="registracija">
		</fieldset>
	</form>
  </div>
    
    <?php include_once 'predlozak/skripte.php'; ?>
    
  </body>
</html>
