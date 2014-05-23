
 <?php 
  session_start(); 
  ?>



!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <style>
    body {
      padding-top: 50px;
      padding-bottom: 20px;
    }
  </style>
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">

<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

<link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="css/main.css">
  
  <link rel="stylesheet" href="css/loginmain.css">
  <link rel="stylesheet" href="css/loginthumbnail.css">
  <link rel="stylesheet" href="css/thumbnail.css">

  


  <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

  <script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "a50ec646-eb0b-40e9-8900-4310cdae3bcb", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
  
<link rel="stylesheet" href="css/responsiveHeaderThumb.css">
</head>
<body class="noise">


<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=296699573830310&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
       <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->
            <div class="navbar navbar-inverse navbar-fixed-top nav navig headerText" role="navigation">
              <div class="container margH">
                <div class="navbar-header">
                 
                   <a class="navbar-brand searchMov" href="#"><img src="img/mobile03.png"></a>
                    <a class="navbar-brand logoMov" href="#"><img src="img/mobile01.png"></a>
                    <a class="navbar-brand loginMov" href="#"><img src="img/mobile02.png"></a>
                </div>
                <div class="buscador">
                  <a class="navbar-brand logo" href="indexLogin.html"><img src="img/logo.png"></a>
                <form>
                  <input  class="searchInput"  placeholder="" type="text"> 
                  <span class="glyphicon glyphicon-search iconSearch"></span>
                </form>
                </div>



            <?php

$conexion =mysqli_connect("localhost","root","","poly");
mysqli_set_charset($conexion, "utf8");
$query = "SELECT * FROM user WHERE id=".$_SESSION['id']." LIMIT 1";
$resultado = mysqli_query($conexion, $query);
while ($fila = mysqli_fetch_array($resultado)) {



 echo "<div class='infoUser'>";   
 echo "<div class='imagenC veroA'>  ";   

 echo  "<a  class='imagenC veroA'  href='perfil.php?id=".$fila['id']."' > "; 
 echo "<img class='imagenC thumbsTxt' src='".$fila['imagen']."'>";            
 echo  "</a>";

echo " </div>";
echo"<strong class='txtUser'>".$fila['usuario']."</strong>";
echo"  <div class='icons'>";
echo "<span class='glyphicon glyphicon-eye-open eyeIcon'></span>";
echo"  <span class='glyphicon glyphicon-envelope mailIcon'></span>";
echo" <a href='upload.php'><span class='glyphicon glyphicon-upload UpIcon'></span></a>";
echo" <a href='includes/destroy.php'><span class='glyphicon glyphicon-off offIcon'></span></a>";

echo "</div>";


echo " </div>";

}




$conexion =mysqli_connect("localhost","root","","poly");
        mysqli_set_charset($conexion, "utf8");
        $query = "SELECT * FROM post WHERE id=".$_GET['id']." LIMIT 1";
        $resultado = mysqli_query($conexion, $query);
        while ($fila = mysqli_fetch_array($resultado)) {




         echo "<div class='container' >";
         echo "<div class='row margenThb'>";
         echo "<div class='col-xs-12 col-md-9'>";
         echo "<div class='nombreThumb'>";
         echo "<p class='tituloThumb'>".$fila['nombre']."</p>";
         echo "</div>";
         echo "<div class='image'>";
         echo "<div href='#'' class='thumbnail'>";
         echo "<img src='".$fila['image']."'>" ;
         echo "</div>";
         echo "</div>";
         echo "</div>";
         echo "</div>";


       }
       mysqli_close($conexion);
       ?>









       

<?php


$conexion =mysqli_connect("localhost","root","","poly");
          mysqli_set_charset($conexion, "utf8");
          /*SELECT user.usuario
            FROM user
            INNER JOIN post
            ON post.idUser=user.id
          */

          //$query = "SELECT * FROM post ";
          $query = "SELECT * FROM user INNER JOIN post ON post.idUser=user.id  LIMIT 1"; 
          $resultado = mysqli_query($conexion, $query);

          while ($fila = mysqli_fetch_array($resultado)) {



            
         echo  "<div id='box'>";
         echo  "<a href='perfil.html?id=".$fila['idUser']."' > "; 
         echo "<img class='imagenC thumbsTxt' src='".$fila['imagen']."'>";            
         echo  "</a>";
         echo  "<a href='perfil.php?id=".$fila['idUser']."'><strong class='boxUser'>".$fila['usuario']."</strong></a>";
         echo  "<hr class='boxSep'>";
         echo  "<div class='boxAbout'>Acerca:</div><br/>";
         echo  "<p class='boxTxt'>" .$fila['about']."</p>";


         echo  "<a href='#' class='btnFav ''><span class='glyphicon glyphicon-star icon star'></span> Favorito </a>";
         echo  "<div class='infoTxt'>";
         echo  "<div class='boxInfo'>Información</div>";
         echo  "<p>Vistas: 5,241<br/>";
         echo  "Favoritos: 2,231<br/>";
         echo  "Comentarios: 3<br/>";
         echo  "</p>";
         echo  "</div>";
         echo  "<hr class='boxSep2'>";
         echo  "<a href='#' class='btnContacto'></span> Contacto </a>";
         echo  "</div>";

         }
         mysqli_close($conexion);
         ?>


<div class="fb-comments" data-href="http://example.com/comments" data-numposts="5" data-colorscheme="light"></div>
</div>


<footer class="grad">
      <div class="container">
        <div class="row">
          <div class="col-md-2 linksRap">
            <strong>Links Rápidos</strong>
            <ul class="footerTxt"> 
              <li><a href="indexLogin.html">Página Principal</a></li>
              <li><a href="perfilLogin.html">Mi Perfil</a></li>
              <li><a href="#">Tutoriales</a></li>
              <li><a href="#">Ayuda</a></li>
            </ul>
          </div>

          <div class="col-md-4 linksRap gradCenter">
        <strong>Encuentranos En: </strong>
        <div class="mrSnuffles">
        <span class='st_facebook_large' displayText='Facebook'></span>
        <span class='st_twitter_large' displayText='Tweet'></span>
        <span class='st_linkedin_large' displayText='LinkedIn'></span>
        <span class='st_pinterest_large' displayText='Pinterest'></span>
        <span class='st_email_large' displayText='Email'></span>
        </div>
      </div>


          <div class="col-md-2 linksRap">
            <strong>Acerca</strong>
            <ul class="footerTxt"> 
              <li><a href="#">Nuestro Objetivo</a></li>
              <li><a href="#">Nuestro Personal</a></li>
              <li><a href="#">Los usuarios Poly</a></li>
            </ul>
          </div>


          <div class="col-md-4 linksRap">
            <strong>Información Legal</strong><br/>
            <p class="footerTxt">Copyright © 2014 Poly. Poly es una marca registrada creada en Cali (Colombia). Para más información puede ver los terminos y condiciones</p>




          </div>        
        </div>




      </footer>


    <script src="js/jquery-2.1.0.min.js"></script>
    <script src="js/jquery.roundabout.js"></script>


    <script src="js/plugins.js"></script>

<script src="js/scroll.js"></script>


    <script src="js/vendor/bootstrap.min.js"></script>

    <script src="js/main.js"></script>


    <script>
      $(document).ready(function() {
        $('.sliderId').roundabout();
      });
    </script>

  </body>
  </html>
