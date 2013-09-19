<?php 
    include('Conn/connect.php'); 


    $product = ((isset($GLOBALS["___mysqli_ston"]) && is_object($GLOBALS["___mysqli_ston"])) ? mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_GET['product']) : ((trigger_error("Fix the mysql_escape_string() call! This code does not work.", E_USER_ERROR)) ? "" : "")); 

    $table_res = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM tProduct WHERE sProduct = '$product'"); 
    $tr_row = mysqli_fetch_row($table_res); 
    if ($tr_row == 0) { 
        $host  = $_SERVER['HTTP_HOST']; 
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\'); 
    $extra = 'index.php'; 
    header("Location: http://$host$uri/$extra"); 
    exit; 
    } else{ 
    $result = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM tProduct WHERE sProduct='$product'"); 
    $row = mysqli_fetch_row($result); 


  //Applications 
  $nproduct = $row[0]; 
  $apptprd = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM tApplicationProduct WHERE nProduct='$nproduct'"); 





  $tApplicationProduct_t = mysqli_fetch_array($apptprd); 
  $napp = $tApplicationProduct_t[0]; 


  $tApp = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM tApplication WHERE nApplication='$napp'"); 
  $tApplication_n = mysqli_num_rows($tApp); 
  $tApplication = mysqli_fetch_array($tApp);

?> 
<!DOCTYPE html> 
<html  xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr" dir="ltr"> 
  <head> 
    <title>Dedax - Eurl Automotive Engineering &amp; Development</title> 
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <!-- Bootstrap --> 
    <link href="dist/css/bootstrap.css" rel="stylesheet" media="screen"> 
    <link href="dist/css/bootstrap-theme.css" rel="stylesheet" media="screen"> 
    <link href="dist/css/style.css" rel="stylesheet" media="screen"> 

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries --> 
    <!--[if lt IE 9]> 
      <script src="dist/js/html5shiv.js"></script> 
      <script src="dist/js/respond.min.js"></script> 
    <![endif]--> 
  </head> 
  <body> 
    <div class="container"> 

          <nav class="navbar navbar-default" role="navigation"> 
             
            <div class="navbar-header"> 
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> 
                <span class="sr-only">Toggle navigation</span> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
              </button> 
              <a class="navbar-brand" href="index.php">DEDAX</a> 
            </div> 

             
            <div class="collapse navbar-collapse navbar-ex1-collapse"> 
              <ul class="nav navbar-nav"> 
                <li><a href="index.php">Acceuil</a></li> 
                <li><a href="search.php">Rechercher</a></li> 
                <li><a href="reference.php">Référence</a></li> 
                
              </ul> 
              <ul class="nav navbar-nav navbar-right"> 
                <li class="dropdown"> 
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Filtres <b class="caret"></b></a> 
                  <ul class="dropdown-menu"> 
                    <li><a target="_blank" href="type.php?type=air">Filtre à  air</a></li> 
                    <li><a target="_blank" href="type.php?type=huile">Filtre à  huile</a></li> 
                    <li><a target="_blank" href="type.php?type=carburant">Filtre à  carburant</a></li> 
                    <li><a target="_blank" href="type.php?type=habitacle">Filtre à  d'habitacle</a></li> 
                    <li><a target="_blank" href="type.php?type=eau">Filtre de l'eau</a></li> 
                    <li><a target="_blank" href="type.php?type=dessicateur">Dessiccateur d'air</a></li> 
                  </ul> 
                </li> 
                <li class="dropdown"> 
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Freinage <b class="caret"></b></a> 
                  <ul class="dropdown-menu"> 
                    <li><a target="_blank" href="type.php?type=plaquette">Plaquette</a></li> 
                  </ul>
                </li>
                <li class="dropdown"> 
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Bougie <b class="caret"></b></a> 
                  <ul class="dropdown-menu"> 
                    <li><a target="_blank" href="type.php?type=bougie">Bougies</a></li> 
                  </ul>
                </li>
                <li class="dropdown"> 
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Interrups &amp; Contacs <b class="caret"></b></a> 
                  <ul class="dropdown-menu"> 
                    <li><a target="_blank" href="type.php?type=phuile">Manocontacts Pression d'Huile</a></li> 
                    <li><a target="_blank" href="type.php?type=feustop">Capteures Mécaniques de Feu Stop</a></li> 
                    <li><a target="_blank" href="type.php?type=thermo">Thermo pour Ventilateur</a></li> 
                    <li><a target="_blank" href="type.php?type=thermo2">Thermo 2 Ventilateurs/Vitesses</a></li> 
                  </ul>
                </li>  
                <li><a href="#">Contact</a></li> 
              </ul> 
            </div><!-- /.navbar-collapse --> 
          </nav>  

          <div class="row"> 
              <h1 style="text-align : center;">Fiche Technique</h1> 
              <hr> 

              <h1 class="btn btn-info btn-lg">Produit : <?php echo $product ?></h1> 

              <?php require 'functions/funcs_prdct.php'; ?> 
          </div><hr> 
          <?php if (!empty($tApplication_n)) {?> 
          <div class="applications"> 
            <h1>Application</h1> 
            <hr> 
            <div class="row"> 
              <?php require 'functions/application.php'; ?> 
            </div> 
          </div> 
          <?php } ?> 
          <!-- Site footer --> 
          <div class="footer">
            <div id="back-top" style="float:right;margin-top:-10px;">
              <a href="#" class="btn btn-info"><span class="glyphicon glyphicon-circle-arrow-up"></span></a>
            </div>
            <p>&copy; Dedax 2013</p>
          </div> 

        </div> <!-- /container --> 

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    <script src="dist/js/jquery.js"></script> 
    <!-- Include all compiled plugins (below), or include individual files as needed --> 
    <script src="dist/js/bootstrap.js"></script> 
    <script src="dist/js/collapse.js"></script> 
    <script src="dist/js/dropdown.js"></script> 

    <script src="http://platform.twitter.com/widgets.js"></script> 
    <script src="dist/js/holder.js"></script> 
    <script src="dist/js/application.js"></script> 

    <script>
      $(".collapse").collapse();

      $('.dropdown-toggle').dropdown();

      $('#back-top a').click(function (event) {
              event.preventDefault();
              $('body,html').animate({
                scrollTop: 0
              }, 800);
              return false;
            });
    </script>

  </body> 
</html> 
<?php } ?>