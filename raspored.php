<?php include_once 'konfiguracija.php'; ?>
<!DOCTYPE html>
<html lang="hr">
  <head>
    <?php include_once 'predlozak/head.php'; ?>
  </head>

  <body>
	<?php include_once 'predlozak/izbornik.php'; ?>

  <div class="container">
  	<h2>Raspored za 20.06. - 26.06.2016.</h2>
  	<div class="table-responsive">
  	 <table class="table table-bordered">
            <thead>
              <tr>
                <td class="dio_tablice" colspan="9" align="center">XL fitnes centar</td>
              </tr>
              <tr>
                <th class="dio_tablice">Sat</th>
                <th>Dvorana</th>
                <th>Ponedjeljak</th>
                <th>Utorak</th>
                <th>Srijeda</th>
                <th>Četvrtak</th>
                <th>Petak</th>
                <th>Subota</th>
                <th>Nedjelja</th>
              </tr>
            </thead>
            
            <tbody>
               <tr>
                <td rowspan="2" class="dio_tablice">09:00</td>
                <td>1</td>
                <td></td>
                <td>FAT BURNING</td>
                <td>FAT BURNING</td>
                <td>FAT BURNING</td>
                <td>FAT BURNING</td>
                <td>FAT BURNING</td>
                <td></td>
              </tr>
              <tr>
              	<td>2</td>
              	<td>PILATES MIX</td>
                <td>VINYASA YOGA </td>
                <td>VINYASA YOGA </td>
                <td>VINYASA YOGA </td>
                <td>VINYASA YOGA </td>
                <td>VINYASA YOGA </td>
                <td>VINYASA YOGA </td>
              </tr>
              <tr>
                <td rowspan="2" class="dio_tablice">15:00</td>
                <td>1</td>
                <td>ZUMBA</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
              	<td>2</td>
              	<td>KRUŽNI TRENING</td>
                <td></td>
                <td>KRUŽNI TRENING</td>
                <td></td>
                <td>KRUŽNI TRENING</td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td rowspan="2" class="dio_tablice">17:00</td>
                <td>1</td>
                <td></td>
                <td>ZUMBA</td>
                <td></td>
                <td>ZUMBA</td>
                <td></td>
                <td>TAE BO/FAT BURNING</td>
                <td></td>
              </tr>
              <tr>
              	<td>2</td>
              	<td>INTERVALNI TRENING</td>
                <td></td>
                <td>INTERVALNI TRENING</td>
                <td></td>
                <td>INTERVALNI TRENING</td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td rowspan="2" class="dio_tablice">18:00</td>
                <td>1</td>
                <td>BOOTIS / CORE</td>
                <td></td>
                <td></td>
                <td>TAE BO/FAT BURNING</td>
                <td></td>
                <td>INTERVALNI PULS</td>
                <td>INTERVALNI PULS</td>
              </tr>
              <tr>
              	<td>2</td>
              	<td>PULS</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td rowspan="2" class="dio_tablice">19:00</td>
                <td>1</td>
                <td></td>
                <td>BOOTIS/CORE</td>
                <td>BOOTIS/CORE</td>
                <td>PULS</td>
                <td>PULS</td>
                <td>PILATES MIX</td>
                <td></td>
              </tr>
              <tr>
              	<td>2</td>
              	<td></td>
                <td></td>
                <td></td>
                <td>BOOTIS/CORE</td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td rowspan="2" class="dio_tablice">20:00</td>
                <td>1</td>
                <td>S-DANCE</td>
                <td></td>
                <td>PILATES</td>
                <td>S-DANCE</td>
                <td>PILATES</td>
                <td></td>
                <td>S-DANCE</td>
              </tr>
              <tr>
              	<td>2</td>
              	<td></td>
                <td>LIFT&PUMP</td>
                <td></td>
                <td>LIFT&PUMP</td>
                <td></td>
                <td>LIFT&PUMP</td>
                <td>LIFT&PUMP</td>
              </tr>
            </tbody>
          </table>
          </div>
          <div class="headerline"></div>    
    <h2 align="center">Imate pitanje u vezi rasporeda ili nečeg drugog? Slobodno nas kontaktirajte:</h2>
    
    <div class="row kontakt">
	    <div class="col-md-6">
	    	<img src="images/pitanje.jpg"  height="370px" width="350px"/>
	    </div>
	    
	    <script src="js/validacija.js"></script>
	    
	    <div class="col-md-6 forma">
	  	<form name="myForm" action="mailto:strahinja944@gmail.com" onsubmit="return validateForm()" method="post" enctype="text/plain">
			<input type="text" placeholder="Ime" name="ime"/>
			<input type="text" placeholder="Prezime" name="prezime"/>
			<input type="text" placeholder="Email" name="email"/>
			<textarea rows="4" cols="50" maxlength="500" name="tekst" placeholder="Vaše pitanje..."></textarea>
			<input type="submit">
		</form>
		</div>
	</div>
	
	
  </div>
    
   <?php include_once 'predlozak/podnozje.php'; ?>
   <?php include_once 'predlozak/skripte.php'; ?>
    
  </body>
</html>
