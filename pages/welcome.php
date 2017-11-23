<?php
   include('session.php');
?>
<!DOCTYPE html>
<!--
Template Name: Lacegant
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
<title>Noticias</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="fl_right">
      <ul class="nospace inline pushright">
        <li><i class="fa fa-phone"></i> +571 2345678</li>
        <li><i class="fa fa-envelope-o"></i> info@mobisport.com</li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo">
      <h1><a href="index.html">MOBISPORT</a></h1>
      <p>MOBILIARIO URBANO Y DEPORTIVO</p>
    </div>
    <!-- ################################################################################################ -->
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <nav id="mainav" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul class="clear">
      <li class="active"><a href="../index.html">inicio</a></li>      
      <li><a href="somos.html">QUIENES SOMOS</a></li>
      <li><a href="productos.html">PRODUCTOS</a></li>
      <li><a href="noticias.html">NOTICIAS</a></li>
      <li><a href="contacto.html">CONTACTO</a></li>
    </ul>
    <!-- ################################################################################################ -->
  </nav>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ --><!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 
      <!-- ################################################################################################ -->      

      <h1>Bienvenido <?php echo $login_session; ?></h1> 
      <h2><a href = "logout.php">Salir</a></h2>
      <p>
        <footer id="footer" class="hoc clear">
          <!-- ################################################################################################ -->
        </footer>
      </p>
    </div>
  </main>
</div>
<div class="wrapper row4">
  <footer id="footer" class="hoc clear">
    <div class="one_quarter first">
      <h6 class="title">ubicación</h6>
      <ul class="nospace linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
            Street Name &amp; Number, Town, Postcode/Zip
          </address>
        </li>
        <li><i class="fa fa-phone"></i> +571 (123) 456 7890</li>
        <li><i class="fa fa-envelope-o"></i> info@mobisport.com</li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="title">noticias</h6>
      <ul class="nospace linklist">
        <li><a href="#">Estadio El Campin</a></li>
        <li><a href="#">Estadio de Santa Marta</a></li>
        <li><a href="#">Otros trabajos</a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="title">Contacto</h6>
      <p class="btmspace-30">Tiene preguntas, puede contactarnos por este medio</p>
      <form method="post" action="#" onSubmit="">
        <fieldset>
          <legend>Newsletter:</legend>
          <input class="btmspace-15" type="text" value="" placeholder="Nombre">
          <input class="btmspace-15" type="text" value="" placeholder="Email">
          <button type="submit" value="submit">Enviar</button>
        </fieldset>
      </form>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear">
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2017 - All Rights Reserved</p>
    <p class="fl_right">Mobisport SAS</p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
<!-- IE9 Placeholder Support -->
<script src="../layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->
</body>
</html>