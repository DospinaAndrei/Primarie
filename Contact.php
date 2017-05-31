<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Primaria Craiova</title>
<meta charset="utf-8">
<link rel="icon" href="images/brand.gif">
<link rel="shortcut icon" href="images/brand.gif">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/form.css">
<link rel="stylesheet" href="css/slider.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/tms-0.4.1.js"></script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body>
<?php 
$cookie_name = "loggedin";
if (isset($_COOKIE[$cookie_name]))
{
	$cookie_value = $_COOKIE[$cookie_name];
	if($cookie_value=="primar")
	{
	
	echo "Esti logat ca $cookie_value!";
	
	echo '<a href="Management.php"><br>Meniu extra privilegii</a>';
}
else echo "Nu ai drepturi de administrator";
}
?>
<header>

	
  <div class="container_12">
    <div class="grid_12">
      <h1><a href="main.php"><img src="images/logo_ro.png" alt=""></a> </h1>
      <div class="clear"></div>
      <div class="menu_block">
        <nav>
          <ul class="sf-menu">
            <li class="with_ul"><a href="main.php">Acasă</a></li>
            <li class="with_ul"><a href="#">Departamente</a>
              <ul>
                <li><a href="organigrama.php">Organigrama</a></li>
                <li><a href="consiliulLocal.php">Consiliul Local</a></li>
              </ul>
            </li>
            <li class="with_ul"><a href="documente.php">Documente</a></li>
            
            <li class="with-ul"><a href="#">Contact</a>
			<ul>
                <li><a href="Chat.php">Chat</a></li> 
                <li><a href="Contact.php">Cerere audienta</a></li> </ul>
			</li>
          </ul>
        </nav>
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</header>
<div class="content">
  <div class="container_12">
    <div class="grid_6">
      <h3 class="head2">Localizare pe hartă</h3>
      <div class="map">
        <figure>
          <iframe src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJK5kht5_XUkcRUdFF7glIM7s&key=AIzaSyAON6__1VeevnGmqcT5LGho9FolMtDMQh0"></iframe>
        </figure>
        <address>
        <dl>
          <dt>
            <p>Primăria Craiova<br>
              STR. A.I. Cuza nr. 7<br>
              Craiova, 200585</p>
          </dt>
          <dd><span>Telefon :</span>+4 123 456 789</dd>
          <dd><span>Fax:</span>+4 0251 /411 561</dd>
          <dd><span>e-mail:</span>consiliulocal@primariacraiova.ro</dd>
        </dl>
        </address>
      </div>
    </div>
    <div class="grid_5 prefix_1">
      <h3 class="head2">Formular Audiente</h3>
      <form action="query.php" method = "post">
	  
		
		<label for = "name" class ="control-label">     Nume:   </label>	
		<input type="text" name="nume" value="" placeholder="">
		
		<br>
		<br>
		<label for = "name" class ="control-label"> Prenume:   </label>
		<input type="text" name="prenume" value="" placeholder="">
		<br>
		<br>
		
		<label for = "name" class ="control-label"> Data:   </label>
		<input type="text" name="data" value="" placeholder="">
		<br>
		<br>
		
		<label for = "name" class ="control-label"> Ora:   </label>
		<input type="text" name="ora" value="" placeholder="">
		<br>
		<br>
		
		<label for = "name" class ="control-label"> CNP:   </label>
		<input type="text" name="cnp" value="" placeholder="">
		<br>
		<br>
		
		<label for = "name" class ="control-label"> Telefon:   </label>
		<input type="text" name="telefon" value="" placeholder="">
		<br>
		<br>
		
		<label for = "name" class ="control-label"> Subiect:   </label>
		<input type="text" name="subiect" value="" placeholder="">
		<br>
		<br>
		<input type="submit" name="trimite" value="Trimite">
		
      </form>
	  
    </div>
	
  </div>
</div>
<footer>
  <div class="container_12">
    <div class="grid_12">
      <p>Camin Livia, Cojocaru Daliana, Asproiu Georgiana, Apipie Liviul, Dospina Andreiul | <a href="#" class="upp">Link către ceva</a></p>
      <address>
      Spațiu pentru adresă<br>
      Spațiu pentru telefon: +4 123 465 789
      </address>
    </div>
    <div class="clear"></div>
  </div>
</footer>
</body>
</html>