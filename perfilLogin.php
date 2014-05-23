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
  <link rel="stylesheet" href="css/perfil.css">
  <link rel="stylesheet" href="css/loginperfil.css">

  


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
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand logo" href="indexLogin.html"><img src="img/logo.png"></a>
                </div>




                <div class="navbar-collapse collapse">
                <form>
                  <input  class="searchInput"  placeholder="Etiquetas" type="text"> 
                  <span class="glyphicon glyphicon-search iconSearch"></span>
                </form>
                 <div class="imagenC veroA ">                 
                    </div>
                    <strong class="txtUser">David Bernal</strong>
                    <div class="icons">
                    <span class="glyphicon glyphicon-eye-open eyeIcon"></span>
                    <span class="glyphicon glyphicon-envelope mailIcon"></span>
                     <a href="upload.html"><span class="glyphicon glyphicon-upload UpIcon"></span></a>
                    <a href="index.html"><span class="glyphicon glyphicon-off offIcon"></span></a>
                  </div>
                    

                </div><!--/.navbar-collapse -->





              </div>
            </div>




   <?php

$conexion =mysqli_connect("localhost","root","","poly");
mysqli_set_charset($conexion, "utf8");
$query = "SELECT * FROM user WHERE id=".$_SESSION['id']." LIMIT 1";
$resultado = mysqli_query($conexion, $query);
while ($fila = mysqli_fetch_array($resultado)) {



       echo  "  <div class='info'>"
       echo  "    <div class='container'>"
       echo  "      <div class='thumbs'>"
       echo  "        <div class='col-md-2 fotoPerfil'>"
       echo  "          <div class='imagenC thumbsTxt'>  "
                echo "<img class='imagenC thumbsTxt' src='".$fila['imagen']."'>"; 

       echo  "          </div>"
       echo  "        </div>"
       echo  "        <div class='col-md-4 fotoPerfil'>"
       echo  "          <h2>".$fila['usuario']."</h2> <br/>"
       echo  "          <p class='perfilStats'><span class='boldStat'>5</span>Seguidores<span  class='boldStat'>73</span>Siguiendo</p>"
       echo  "          <br/> "
       echo  "          <a href='#' class='btnInfo'><span class='glyphicon glyphicon-pencil icon pencil'></span> Editar </a> "          
       echo  "        </div>"
       echo  "        <div class='col-md-5'>"
       echo  "           <a href='#' class='btnInfo'><span class='glyphicon glyphicon-pencil icon pencil'></span> Editar </a>"
       echo  "         <h3>Acerca de Mi:</h3> <br/>"

       echo  "         <p class='miInfo'>".$fila['about']."</p>"
       echo  "         <div>"
          
       echo  "           <div class='findTxt linea'>"
       echo  "        <p  class='findMeTXT'>Encuentrame en:</p>"
       echo  "        <div class='findME'>"
       echo  "          <span class='st_twitter' ></span>"
       echo  "          <span class='st_facebook' ></span>"
       echo  "          <span class='st_linkedin' ></span>"
       echo  "          <span class='st_email' ></span>"
       echo  "        </div>"
       echo  "      </div>"
       echo  "        </div>"
       echo  "      </div>   "          
       echo  "    </div>"
       echo  "  </div>"
       echo  "</div>"


        echo  "</div>"  
        echo  "</div>"
  echo  "</div>"
    echo  "</div>"
?>



       





  <div class="container ">

     <div class="OpcionImg row">
      <div class="col-md-2 col-md-offset-4"> 
        <a  class="tbsCom" href="">Proyectos</a>
      </div>
      <div class="col-md-2"> 
        <a class="tbsCom" href="">Favoritos</a>
      </div>

    </div>
    <!-- Example row of columns -->
    
    
    
              <div class="row orgTra">
                <p class="tbsFiltro col-md-1" >Filtrar Por:</p>


                <a href="http://designshack.net/" class="btnFil col-md-1">Nuevos</a>



                <a href="http://designshack.net/" class="btnFil col-md-1">Rating</a>



                <a href="http://designshack.net/" class="btnFil col-md-1">Vistas</a>

              </div>



     <div class="row margenThb">

       <?php


          $conexion =mysqli_connect("localhost","root","","poly");
          mysqli_set_charset($conexion, "utf8");
          /*SELECT user.usuario
            FROM user
            INNER JOIN post
            ON post.idUser=user.id
          */

          //$query = "SELECT * FROM post ";
          $query = "SELECT * FROM user INNER JOIN post ON post.idUser=".$_SESSION['id']."";
          $resultado = mysqli_query($conexion, $query);

          while ($fila = mysqli_fetch_array($resultado)) {

            echo  " <div class='col-xs-12 col-md-4 imgViewer'>";
            echo  "  <div class='image'>";
            echo  "<a href='thumbs.php?id=".$fila['id']."' class='thumbnail'>";
            echo "<img src='".$fila['image']."'>";
            echo  "<div class='row thumbTxtCont'>";
            echo    "<h4 class='col-md-8 nombreTra'>".$fila['nombre']."<br";
              echo" /><span class='autor'>".$fila['usuario']."</span></h4>";
            echo  "<div class='col-md-4 stars pull-right'>";
            echo   "<p class='favs'>".$fila['likes']."</p><span class='glyphicon glyphicon-star icon'></span>";
            echo" </div> ";
            echo" </div> "    ;
            echo"</a>";
            echo" </div>";
            echo  "</div>";

          }
          mysqli_close($conexion);
          ?>

 
</div>


</div>

<hr>

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



    <script src="js/vendor/bootstrap.min.js"></script>

    <script src="js/main.js"></script>


    <script>
      $(document).ready(function() {
        $('.sliderId').roundabout();
      });
    </script>

  </body>
  </html>
