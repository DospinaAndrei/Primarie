<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Primaria Craiova</title>
<meta charset="utf-8">
<link rel="icon" href="images/brand.gif">
<link rel="shortcut icon" href="images/brand.gif">
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
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
<body>
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
    <div class="grid_12">
      <h3>Anunturi si documente oficiale</h3>
    </div>
		<li class="with_ul"><a href="hotararea200/hotararea200.html">Hotararea 200</a></li>
		<li class="with_ul"><a href="procesverbal/procesVerbal.html">Proces Verbal</a></li>
		<li class="with_ul"><a href="dezinsectie/dezinsectie.html">Dezinsectie </a></li>
		<li class="with_ul"><a href="anuntvaccin/anuntvaccin.html">Vaccin animale</a></li>
  </div>
</div>
<footer>
  <div class="container_12">
    <div class="grid_12">
      <p>Camin Livia, Cojocaru Daliana, Asproiu Georgiana, Apipie Liviu, Dospina Andrei 
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
 