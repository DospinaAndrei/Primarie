<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Primaria Craiova</title>
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
<meta charset="utf-8">
<link rel="icon" href="images/brand.gif">
<link rel="shortcut icon" href="images/brand.gif">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/form.css">
<link rel="stylesheet" href="css/chat.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/superfish.js"></script>
<script src="js/forms.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
</head>
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
            <li class="with_ul"><a href="Departamente.php">Departamente</a>
              <ul>
                <li><a href="organigrama.php">Organigrama</a></li>
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
<body>
<div class="top_block tb1">
  <div class="container_12">
    
<div id="chatContainer">

    <div id="chatTopBar" class="rounded"></div>
    <div id="chatLineHolder"></div>
    
    <div id="chatUsers" class="rounded"></div>
    <div id="chatBottomBar" class="rounded">
    	<div class="tip"></div>
        
        <form id="loginForm" method="post" action="">
            <input id="name" name="name" class="rounded" maxlength="16" />
            <input id="email" name="email" class="rounded" />
            <input type="submit" class="blueButton" value="Login" />
        </form>
        
        <form id="submitForm" method="post" action="">
            <input id="chatText" name="chatText" class="rounded" maxlength="255" />
            <input type="submit" class="blueButton" value="Submit" />
        </form>
        
    </div>
    
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
  
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script src="js/jScrollPane/jquery.mousewheel.js"></script>
<script src="js/jScrollPane/jScrollPane.min.js"></script>
<script src="js/script.js"></script>

</footer>
</body>
</html>
