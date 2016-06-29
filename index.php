<?php include_once 'konfiguracija.php'; ?>

<?php

	session_start();
	require 'konekcija.php';
	
	if(isset($_SESSION['user_id']))
	{
		$records = $conn->prepare('SELECT id, email, password FROM clanovi WHERE id= :id');
		$records->bindParam(':id', $_SESSION['user_id']);
		$records->execute();
		$results = $records->fetch(PDO::FETCH_ASSOC);
		
		$user = NULL;
		
		if(count($results)> 0)
		{
			$user = $results;
		}
	}
	
?>

<!DOCTYPE html>
<html lang="hr">
  <head>
    <?php include_once 'predlozak/head.php'; ?>
  </head>

  <body>
	<?php include_once 'predlozak/izbornik.php'; ?>
	
	<?php if(!empty ($user)): ?>
			
	  <div class="container">
	  	
	  	<div class="jumbotron">
	   	 <div class="naslov"><h1 class="animated tada"><?php echo $naslovAPP; ?></h1>
	      Prijava:<a href="prijava.php"><img src="images/prijava.png" class="doorlist"/></a>
	      Registracija:<a href="registracija.php"><img src="images/registracija.png" class="doorlist1"/></a>
	     </div>
	     <div align="center">
	      	<p>Prijavljen: <?= $user['email']; ?></p>
	      	<a href="http://localhost/phpmyadmin/sql.php?server=1&db=baza&table=clanovi&pos=0&token=ef000f861e453d33b58558de76d23aca" class="odjava">Prikazi clanove</a><br />
	  		<a href="odjava.php" class="odjava">Odjava</a>
	  	 </div>
	    </div>
    
	    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	        <ol class="carousel-indicators">
	          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
	          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	          <li data-target="#carousel-example-generic" data-slide-to="3"></li>
	        </ol>
	        <div class="carousel-inner" role="listbox">
	          <div class="item active">
	            <img src="images/pozadina1.jpg" alt="First slide" />
	          </div>
	          <div class="item">
	            <img src="images/pozadina3.jpg" alt="Second slide">
	          </div>
	          <div class="item">
	            <img src="images/pozadina4.jpg" alt="Third slide">
	          </div>
	          <div class="item">
	            <img src="images/pozadina5.jpg" alt="Fourth slide">
	          </div>
	        </div>
	        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	          <span class="sr-only">Previous</span>
	        </a>
	        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	          <span class="sr-only">Next</span>
	        </a>
	      </div>
    
	 	<div class="page-header">
	        <h1 align="center">Obavijesti</h1>
	        <div class="headerline"></div>
	    </div>
    
	      <div class="starter-template">
	       		<h2>Lorem Ipsum</h2>
	        	<p class="lead">
	        		Lorem Ipsum je jednostavno probni tekst koji se koristi u tiskarskoj i slovoslagarskoj industriji. 
	        		Lorem Ipsum postoji kao industrijski standard još od 16-og stoljeća, kada je nepoznati tiskar uzeo 
	        		tiskarsku galiju slova i posložio ih da bi napravio knjigu s uzorkom tiska. Taj je tekst ne samo 
	        		preživio pet stoljeća, već se i vinuo u svijet elektronskog slovoslagarstva, ostajući u suštini 
	        		nepromijenjen. Postao je popularan tijekom 1960-ih s pojavom Letraset listova s odlomcima Lorem Ipsum-a,
	        		a u skorije vrijeme sa software-om za stolno izdavaštvo kao što je Aldus PageMaker koji također sadrži 
	        		varijante Lorem Ipsum-a.
	        	</p>
	        	<div class="headerline"></div>
	      </div>
    
	      <div class="starter-template">
	       		<h2>Lorem Ipsum</h2>
	        	<p class="lead">
	        		Lorem Ipsum je jednostavno probni tekst koji se koristi u tiskarskoj i slovoslagarskoj industriji. 
	        		Lorem Ipsum postoji kao industrijski standard još od 16-og stoljeća, kada je nepoznati tiskar uzeo 
	        		tiskarsku galiju slova i posložio ih da bi napravio knjigu s uzorkom tiska. Taj je tekst ne samo 
	        		preživio pet stoljeća, već se i vinuo u svijet elektronskog slovoslagarstva, ostajući u suštini 
	        		nepromijenjen. Postao je popularan tijekom 1960-ih s pojavom Letraset listova s odlomcima Lorem Ipsum-a,
	        		a u skorije vrijeme sa software-om za stolno izdavaštvo kao što je Aldus PageMaker koji također sadrži 
	        		varijante Lorem Ipsum-a.
	        	</p>
	        	<div class="headerline"></div>
	      </div>
    
	      <div class="starter-template">
		      	<h2>Lorem Ipsum</h2>
		        <p class="lead">
	        		Lorem Ipsum je jednostavno probni tekst koji se koristi u tiskarskoj i slovoslagarskoj industriji. 
	        		Lorem Ipsum postoji kao industrijski standard još od 16-og stoljeća, kada je nepoznati tiskar uzeo 
	        		tiskarsku galiju slova i posložio ih da bi napravio knjigu s uzorkom tiska. Taj je tekst ne samo 
	        		preživio pet stoljeća, već se i vinuo u svijet elektronskog slovoslagarstva, ostajući u suštini 
	        		nepromijenjen. Postao je popularan tijekom 1960-ih s pojavom Letraset listova s odlomcima Lorem Ipsum-a,
	        		a u skorije vrijeme sa software-om za stolno izdavaštvo kao što je Aldus PageMaker koji također sadrži 
	        		varijante Lorem Ipsum-a.
	        	</p>
	        	<div class="headerline"></div>
	      </div>
	    
	      <div class="starter-template">
	        	<h2>Lorem Ipsum</h2>
		        <p class="lead">
	        		Lorem Ipsum je jednostavno probni tekst koji se koristi u tiskarskoj i slovoslagarskoj industriji. 
	        		Lorem Ipsum postoji kao industrijski standard još od 16-og stoljeća, kada je nepoznati tiskar uzeo 
	        		tiskarsku galiju slova i posložio ih da bi napravio knjigu s uzorkom tiska. Taj je tekst ne samo 
	        		preživio pet stoljeća, već se i vinuo u svijet elektronskog slovoslagarstva, ostajući u suštini 
	        		nepromijenjen. Postao je popularan tijekom 1960-ih s pojavom Letraset listova s odlomcima Lorem Ipsum-a,
	        		a u skorije vrijeme sa software-om za stolno izdavaštvo kao što je Aldus PageMaker koji također sadrži 
	        		varijante Lorem Ipsum-a.
	        	</p>
	      </div>
  </div>
    
	<?php include_once 'predlozak/podnozje.php'; ?>
	
  	<?php else: ?>
	  	<?php include_once 'predlozak/pocetna.php'; ?>
	    <?php include_once 'predlozak/podnozje.php'; ?>
	<?php endif; ?>
		
    <?php include_once 'predlozak/skripte.php'; ?>
    
  </body>
</html>
