
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
  <link rel="stylesheet" href="css/thumbnail.css">

  <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  
  <script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "a50ec646-eb0b-40e9-8900-4310cdae3bcb", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

</head>
<body class="noise">



        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->
            <div class="navbar navbar-inverse navbar-fixed-top nav navig headerText" role="navigation">
              <div class="container margH">
                <div class="navbar-header">
                 
                  <a class="navbar-brand logo" href="index.html"><img src="img/logo.png"></a>
                  <a class="navbar-brand searchMov" href="#"><img src="img/mobile03.png"></a>
                    <a class="navbar-brand logoMov" href="#"><img src="img/mobile01.png"></a>
                    <a class="navbar-brand loginMov" href="#"><img src="img/mobile02.png"></a>
                </div>
                <div class="">
                   <form>
                  <input  class="searchInput"  placeholder="Etiquetas" type="text"> 
                  <span class="glyphicon glyphicon-search iconSearch"></span>
                </form>
                  <div class="dropdown">
                    <a id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="/page.html" class="dropdown btnLogin col-md-offset-10">Login <span class="glyphicon glyphicon-chevron-down iconLogin"></span>
                    </a>

                    
                    <div class="dropdown-menu noise " role="menu" aria-labelledby="dLabel">
                     <div class="lifeline noise"></div>
                     <form class="dropPost">

                     <input  class="dropInput" placeholder="Usuario" type="text"> 
                    </form>
                    <form class="dropPost">

                      <input  class="dropInput" placeholder="Contraseña" type="password"> 
                    </form>
                    <a href="indexLogin.html" class="btnLogin btnLoginDos"> LogIn </a>
                    <hr class="sepDrop">
                    <p class="dropTxt"> ¿No tienes cuenta? </p>
                    <div class="btnLogin btnLoginReg "  data-toggle="modal" data-target="#myModal"> Registrate </div>
                  </div>
                </div>

              </div><!--/.navbar-collapse -->
            </div>
          </div>


      

 <?php


$conexion =mysqli_connect("localhost","poly","poly","Poly");
mysqli_set_charset($conexion, "utf8");
$query = "SELECT * FROM post WHERE id=".$_GET['id']." LIMIT 1";
$resultado = mysqli_query($conexion, $query);
while ($fila = mysqli_fetch_array($resultado)) {
    
}
mysqli_close($conexion);
?>





  <div class="container ">
     

    <div class="row margenThb">

      <div class="col-xs-12 col-md-9">
      <div class="nombreThumb">
<p class="tituloThumb">Grem, El Vikingo</p>
      </div>
        <div class="image">
          <div href="#" class="thumbnail">
            <img src="img/vikingo.jpg" alt="...">  
                      
             
         </div>     
          </div>     
        
      </div>
    </div>
    <div class="infoMov">
      <a href="perfil.html" class="imagenC thumbsTxt">                 
                    </a>
                    <a href="perfil.html"><strong class="boxUser">Verónica Alegría</strong></a>
<div class="infoTxt">
             <p>Vistas: 5,241<br/>
             Favoritos: 2,231<br/>
             Comentarios: 3<br/>
             </p>
           </div>

         <a href="#" class="btnFav "><span class="glyphicon glyphicon-star icon star"></span> Favorito </a>            

                   
        <p class="boxTxt">Este proyecto fue desarrollado  durante 2 semanas como concursante en una convocatoria para la quinta edición del festival Magna CG realizado en Londres en el año 2013. Me basé en la película “como entrenar a tu dragón” para las vestimenta de Grem. El modelo fue hecho en 3D Max y renderizado Con los assets de V-Ray.</p>
          
           
    </div>
    

<div class="row ">
<div class="col-md-9">
<form class="marginPost">
   <input  class="myComent comentario" placeholder="Escribir Comentario" type="text"> 
   <div class="btnComent">Post</div>
   </form>

</div>  


</div>


</div>

<div id='box'>
  <a href="perfil.html" class="imagenC thumbsTxt">                 
                    </a>
                    <a href="perfil.html"><strong class="boxUser">Verónica Alegría</strong></a>

                    <hr class="boxSep">

                     <div class="boxAbout">Acerca:</div><br/>
        <p class="boxTxt">Este proyecto fue desarrollado  durante 2 semanas como concursante en una convocatoria para la quinta edición del festival Magna CG realizado en Londres en el año 2013. Me basé en la película “como entrenar a tu dragón” para las vestimenta de Grem. El modelo fue hecho en 3D Max y renderizado Con los assets de V-Ray.</p>
           <a href="#" class="btnFav "><span class="glyphicon glyphicon-star icon star"></span> Favorito </a>
           <div class="infoTxt">
             <div class="boxInfo">Información</div>
             <p>Vistas: 5,241<br/>
             Favoritos: 2,231<br/>
             Comentarios: 3<br/>
             </p>
           </div>
           <hr class="boxSep2">
           <a href="#" class="btnContacto"></span> Contacto </a>

</div>


<hr>

<footer class="grad">
      <div class="container">
        <div class="row">
          <div class="col-md-2 linksRap">
            <strong>Links Rápidos</strong>
            <ul class="footerTxt"> 
              <li><a href="#">Página Principal</a></li>
              <li><a href="#">Mi Perfil</a></li>
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
