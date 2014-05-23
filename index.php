  <?php 
  session_start(); 
  include_once "includes/database.php"; 

  function verificar_login($user,$password,&$result) {

    echo("Entre a la funcion");
    $sql = "SELECT * FROM user WHERE usuario = '$user' and password = '$password'"; 
    $rec = mysql_query($sql); 
    $count = 0; 

    while($row = mysql_fetch_object($rec)) 
    { 
      $count++; 
      $result = $row; 
    } 

    if($count == 1) 
    { 
      return 1; 
    } 

    else 
    { 
      return 0; 
    } 
  } 

  if(!isset($_SESSION['id'])) 
  { 
    if(isset($_POST["login"])) 
    { 
      if(verificar_login($_POST['user'],$_POST['password'],$result) == 1) 
      { 
        $_SESSION['id'] = $result->id; 
        header("location:indexLogin.php?id=".$_SESSION['id'].""); 
      } 
      else 
      { 
         echo '<h1>El correo o la contraseña son incorrectas</h1>'; 
        
      } 
    }
 } 
 else { 
                 echo 'Su usuario ingreso correctamente.'; 
                 echo "<a href='indexLogin.php?id=".$_SESSION['id']."'>Logout</a>"; 
   header("location:indexLogin.php?id=".$_SESSION['id'].""); 
  } 
  ?>

  <!DOCTYPE html>
  <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
  <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
  <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
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
                    <a class="navbar-brand logo" href="#"><img src="img/logo.png"></a>
                  </div>
                  <div class="">
                    <form>
                      <input  class="searchInput"  placeholder="Buscar" type="text"> 
                      <span class="glyphicon glyphicon-search iconSearch"></span>
                    </form>
                    <div class="dropdown">
                      <a id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="/page.html" class="dropdown btnLogin col-md-offset-10">Login <span class="glyphicon glyphicon-chevron-down iconLogin"></span>
                      </a>

                      
                      <div class="dropdown-menu noise " role="menu" aria-labelledby="dLabel">
                       <div class="lifeline noise"></div>
                       <form action="" method="post" class="login"> 
                        <div><label>Username</label><input name="user" type="text" ></div> 
                        <div><label>Password</label><input name="password" type="password"></div> 
                        <div><input name="login" type="submit" value="login"></div> 
                      </form> 


                      <hr class="sepDrop">
                      <p class="dropTxt"> ¿No tienes cuenta? </p>
                      <div class="btnLogin btnLoginReg "  data-toggle="modal" data-target="#myModal"> Registrate </div>
                    </div>
                  </div>

                </div><!--/.navbar-collapse -->
              </div>
            </div>


            <div class="container slider">
              <ul class="col-sm-2 col-md-4 col-md-offset-6 sliderId">
                <li><img src="img/slider01.jpg"></li>
                <li><img src="img/slider02.jpg"></li>
                <li><img src="img/slider03.jpg"></li>
              </ul>
            </div>


            <div class="info">

              <div class="container">
                <div class="thumbs">
                  <div class="col-sm-4 col-md-4 ">
                    <div class="bicho imagenC thumbsTxt">                 
                    </div>
                    <div class="thumbsTxt "> 
                      <strong>Aprende con los mejores</strong>
                      <p>Mira los mejores consejos y tips del propio Neville Page. Trabajos como Avatar, Star trek y Tron hacen parte de su portafolio.</p>
                    </div>
                  </div>
                  <div class="col-sm-4  col-md-4 ">
                    <div class="linda imagenC thumbsTxt">                 
                    </div>
                    <div class=" thumbsTxt"> 
                      <strong>Tutoriales asombrosos</strong>
                      <p>Mira tutoriales hechos por Carlos Ortega. Reconocido por su fina estetica y un juego de luces único.Ganador “CGChoice Awards”.</p>
                    </div>
                  </div>
                  <div class="col-sm-4  col-md-4 ">
                    <div class="elsa imagenC thumbsTxt">                 
                    </div>
                    <div class="thumbsTxt"> 
                      <strong>Traido desde pixar</strong>
                      <p>Descubre como fueron hechas peliculas como Frozen, Up, Monsters-inc, entre otras.Sólo encontraras esto aquí en Poly</p>
                    </div>
                  </div>
                </div>


                <hr class="col-md-12 separador">
                <h2 class="col-sm-12 col-md-12">¿Aún sin cuenta?</h2>

                <div class="col-sm-12 col-md-12">
                  <div class="backBtnReg">
                    <div class="btnReg">
                      <div class="frontBtnReg " data-toggle="modal" data-target="#myModal">
                        Registrarse
                      </div></div>

                      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog ">
                          <div class="modal-content regIndx">
                            <div class="modal-header headerReg">

                              <h4 class="modal-title modalHeaderTxt" id="myModalLabel">Registrate</h4>
                            </div>
                            <div class="modal-body">
                              <p class="bodyTxtModal"> Registrate de manera rápida usando</p>
                              <div class="connectBtnModal">
                                <a href="indexLogin.html"><img src="img/btnSocialFb.png" class="btnSocial"></a>
                                <a href="indexLogin.html"><img src="img/btnSocialTweet.png" class="btnSocial"></a>

                              </div>
                              <div class="modalLine">
                                <hr>
                                <p>o</p>
                                <hr>
                              </div>
                              <p class="bodyTxtModal"> Tambien puedes usar tu correo</p>
                              <form class="modalPost">
                                <p>Nombre de Usuario</p>
                                <input  class="lgInput graphicInput"  id="signup-username" type="text"> 
                              </form>

                              <form class="modalPost">
                               <p>Correo electrónico</p>
                               <input  class="lgInput graphicInput" type="email"> 
                             </form>

                             <div>
                               <form class="modalPostSm">
                                <p>Contraseña</p>
                                <input  class="smInput graphicInput"  type="password"> 
                              </form>

                              <form class="modalPostSm">
                               <p>Confirmar Contraseña</p>
                               <input  class="smInput graphicInput" id="signup-password" type="password"> 
                             </form>

                           </div>

                           <a href="indexLogin.php" class="btnFil modalBtn">Crear Cuenta Poly</a>
                         </div>

                       </div>
                     </div>
                   </div>
                 </div>
               </div>
               <div class="col-md-6 col-md-offset-3 txtInfo" >
                <p>
                  Registrate ahora y obtén acceso a la mejor red social de modelado 3D del mundo. Una red conformada por personas con gran talento y legendas del mundo del CG. Registrarte es completamente gratis y podrás ser parte de todo el asombroso contenido mostrado a continuación.
                </p>
              </div>
            </div>

          </div>

          <div class="infoTrian">
            <div class="triangle">

            </div>
          </div>





          <div class="container marg3 ">
            <!-- Example row of columns -->
            <div class="row"><strong class="tbsCom">Trabajos de la Comunidad</strong></div>
            <hr class="row sepTra">
            <div class="row orgTra">
              <p class="tbsFiltro col-md-1" >Filtrar Por:</p>


              <a href="#" class="btnFil col-md-1">Nuevos</a>



              <a href="#" class="btnFil col-md-1">Rating</a>



              <a href="#" class="btnFil col-md-1">Vistas</a>

            </div>




          <?php


          $conexion =mysqli_connect("localhost","root","","poly");
          mysqli_set_charset($conexion, "utf8");
          /*SELECT user.usuario
            FROM user
            INNER JOIN post
            ON post.idUser=user.id
          */

          //$query = "SELECT * FROM post ";
          $query = "SELECT * FROM user INNER JOIN post ON post.idUser=user.id";
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



          <script src="js/vendor/bootstrap.min.js"></script>

          <script src="js/main.js"></script>


          <script>
          $(document).ready(function() {
            $('.sliderId').roundabout();
          });
          </script>

        </body>
        </html>
