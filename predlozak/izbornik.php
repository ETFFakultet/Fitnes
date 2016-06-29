	<!-- div koji se sastoji od logo slike, imena i izbornika -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="index.php" class="pull-left"><img src="images/logo1.jpg" alt="" height="50" width="100"></a>
          <a class="navbar-brand" href="index.php">XL fitnes centar</a>
        </div>

        <!-- izbornik -->
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
              <li <?php
              
			      if($_SERVER["PHP_SELF"]== $putanjaAPP . "index.php")
			      {
			      	echo "class=\"active\"";
			      }
				  
			      ?>><a href="<?php echo $putanjaAPP; ?>index.php">Početna</a></li>
            <li <?php
              
			      if($_SERVER["PHP_SELF"]== $putanjaAPP . "onama.php")
			      {
			      	echo "class=\"active\"";
			      }
				  
			      ?>><a href="<?php echo $putanjaAPP; ?>onama.php">O nama</a></li>
            <li <?php
              
			      if($_SERVER["PHP_SELF"]== $putanjaAPP . "clanarina.php")
			      {
			      	echo "class=\"active\"";
			      }
				  
			      ?>><a href="<?php echo $putanjaAPP; ?>clanarina.php">Članarina</a></li>
			<li <?php
              
			      if($_SERVER["PHP_SELF"]== $putanjaAPP . "raspored.php")
			      {
			      	echo "class=\"active\"";
			      }
				  
			      ?>><a href="<?php echo $putanjaAPP; ?>raspored.php">Raspored</a></li>      
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>