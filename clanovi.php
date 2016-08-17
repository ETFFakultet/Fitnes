	<?php
		require_once ('konekcija.php');
		require_once ('konfiguracija.php');
		include 'predlozak/head.php';
		$sql = 'SELECT * FROM clan ORDER BY id';
		$result = $conn->query($sql,PDO::FETCH_ASSOC) ;
		$users = $result->fetchAll();
		$i = 0;
	?>

	<!DOCTYPE html>
	<head>
	    <link href="<?php echo $putanjaAPP; ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body class="prikaz" background="images/pozadina6.jpg">
		<div class="container">
			<p align="center"><a class="pocetna" href="http://localhost/Fitnes/index.php"> Početna </a></p>
		    <table class="table table-bordered">
		        <thead>
		        <tr>
		            <th>ID</th>
		            <th>Ime</th>
		            <th>Prezime</th>
		            <th>Članarina plaćena</th>
		            <th>Obriši</th>
		        </tr>
		        </thead>
		        <tbody>
		        <?php foreach($users as  $user):?>
		        <tr>
		            <td><?php echo $user['id'] ?></td>
		            <td><?php echo $user['ime'] ?></td>
		            <td><?php echo $user['prezime'] ?></td>
		            <td><?php echo $user['clanarina_placena'] ?></td>
		            <td> <a href="obrisi.php?user_id=<?php echo $user['id'] ?>">Obriši</a> </td>
		        </tr>
		        <?php $i++; endforeach; ?>
		
		        </tbody>
		    </table>
	    </div>
	    <p align="center"><a class="pocetna" href="http://localhost/phpmyadmin/sql.php?server=1&db=fitnes&table=clan&pos=0&token=ef000f861e453d33b58558de76d23aca">Uvid i moguća izmjena baze</a></p>
	</body>
	</html>
