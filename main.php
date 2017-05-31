<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Primaria Craiova</title>
<meta charset="utf-8">
<link rel="icon" href="images/brand.gif">
<link rel="shortcut icon" href="images/brand.gif">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/slider.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/tms-0.4.1.js"></script>
<script>
$(window).load(function () {
    $('.slider')._TMS({
        show: 0,
        pauseOnHover: false,
        prevBu: '.prev',
        nextBu: '.next',
        playBu: false,
        duration: 800,
        preset: 'fade',
        pagination: true, //'.pagination',true,'<ul></ul>'
        pagNums: false,
        slideshow: 8000,
        numStatus: false,
        banners: true,
        waitBannerAnimation: false,
        progressBar: false
    })
});
</script>
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
<div class="top_block">
  <div class="slider-relative">
    <div class="slider-block">
      <div class="slider">
        <ul class="items">
          <li><img src="images/slide.jpg" alt="">
            <div class="banner">În noi<br>
              Poți avea încredere</div>
          </li>
          <li><img src="images/slide1.jpg" alt="">
            <div class="banner">Lucrăm doar<br>
              pentru binele comun</div>
          </li>
          <li><img src="images/slide2.jpg" alt="">
            <div class="banner">Doar împreună<br>
              putem cunoaște succesul!</div>
          </li>
          <li><img src="images/slide3.jpg" alt="">
            <div class="banner">Orașul nostru,<br>
              mândria noastră!</div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="container_12">
    <div class="grid_3">
      <div class="box"><img src="images/page1_img1.jpg" alt=""><a href="#" class="maxheight">Standardele de Lucru<img src="images/link_bg.png" alt=""></a></div>
    </div>
    <div class="grid_3">
      <div class="box"><img src="images/page1_img2.jpg" alt=""><a href="#" class="maxheight">Formular<img src="images/link_bg.png" alt=""></a></div>
    </div>
    <div class="grid_3">
      <div class="box"><img src="images/page1_img3.jpg" alt=""><a href="#" class="maxheight">Întrebări <img src="images/link_bg.png" alt=""></a></div>
    </div>
    <div class="grid_3">
      <div class="box"><img src="images/page1_img42.jpg" alt=""><a href="Chat.html" class="maxheight">Echipa<img src="images/link_bg.png" alt=""></a></div>
    </div>
  </div>
</div>
<!--<div class="content page1">
  <div class="container_12">
    <div class="grid_3"> <img src="images/page1_img5.jpg" alt="">
      <div class="text1">family law and estate planning</div>
      <p class="col1"><a href="#">Click aici</a> pentru mai multe informații </p>
      text gri <br>
      <a href="#" class="btn">Buton</a> </div>
    <div class="grid_3"> <img src="images/page1_img6.jpg" alt="">
      <div class="text1">Intrebari &amp; Litigation</div>
      At vero eos et accusamus et iusto odio dignissimos ducimus qui bl abd gdihtii praesentium voluptatum deenir rf uiti jll atque. Corrupti quos doloregts et quas molestias excepturi sint  hip occaecati. At vero eos et  hhj  jk kjusamu. <br>
      <a href="#" class="btn">Buton</a> </div>
    <div class="grid_3"> <img src="images/page1_img7.jpg" alt="">
      <div class="text1">Real Estate Litigation &amp; Transactions</div>
      At vero eos et accusamus et iusto odio dignissimos ducimus qui bl abd gdihtii praesentium voluptatum deenir rf uiti jll atque. Corrupti quos doloregts et quas molestias excepturi sint  hip occaecati. At vero eos et  hhj  jk kjusamu. <br>
      <a href="#" class="btn">Buton</a> </div>
    <div class="grid_3"> <img src="images/page1_img8.jpg" alt="">
      <div class="text1">Personal Injury<br>
        &nbsp;</div>
      At vero eos et accusamus et iusto odio dignissimos ducimus qui bl abd gdihtii praesentium voluptatum deenir rf uiti jll atque. Corrupti quos doloregts et quas molestias excepturi sint  hip occaecati. At vero eos et  hhj  jk kjusamu. <br>
      <a href="#" class="btn">more</a> </div>
  </div> -->
</div>
<div class="bottom_block">
  <div class="container_12">
    <div class="grid_6">
      <h5>Ultimele Evenimente</h5>
      <ul>
        <li><a href="#">Început lucrul la site</a></li>
        <li><a href="#">Am facut ceva</a></li>
        <li><a href="#">Și altceva</a></li>
        <li><a href="#">Și alt lucru </a></li>
        <li><a href="#">Și încă unul </a></li>
      </ul>
    </div>
    <div class="grid_5">
      <h4>Date de Contact</h4>
      <p>Echipa poate fi contactata la urmatoarele numere de telefon </p>
      <span>+4 0762622202</span><span>+4 0761234567</span> </div>
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