<?PHP
/**
* GUI Template: page header
*
* @category   GUI
* @package    MySQLConverterTool
* @author     Andrey Hristov <andrey@php.net>, Ulf Wendel <ulf.wendel@phpdoc.de>, Saif Lacrimosa <cool2309@gmail.com>
* @copyright  1997-2006 The PHP Group
* @license    http://www.php.net/license/3_0.txt  PHP License 3.0
* @version    CVS: $Id:$, Release: @package_version@
* @link       http://www.mysql.com
* @since      Available since Release 1.0
*/
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta charset="utf-8">
    <title><?php print (isset($snippet_title)) ? $snippet_title : 'MySQL ext/mysql Converter Tool'; ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Convert Old MySQL Codes to the new MySQLi">
    <meta name="author" content="Saif Lacrimosa">

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" /> 
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <script language="JavaScript">
        function toggle_view(id) {
            var el;            
            if (!(el = document.getElementById(id)))
                return;
            
            if (el.style.display == 'inline') {                               
                el.style.display = 'none';                     
            } else {
                el.style.display = 'inline';                
            }
            
        }
    </script>       
</head>
<body>
<div class="container">
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="./">Mysql2Mysqli</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <li class="active"><a name="top" href="index.php">Home</a></li>
      <li><?PHP
        if (isset($snippet_nav_path) && is_array($snippet_nav_path)) {
            foreach ($snippet_nav_path as $link => $label)
                printf('<a class="active" href="%s">%s</a>', $link, $label);
        }            
        ?></li>
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="Help">Help</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contact <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="mailto:cool2309@gmail.com">Saif Lacrimosa</a></li>
          <li><a href="http://www.free-tuts.tk">Free TUTS</a></li>
        </ul>
      </li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>
<div class="sep"></div>
<div class="">
    <h1><?PHP print (isset($snippet_greeting)) ? $snippet_greeting : 'MySQL ext/mysql Converter Tool'; ?></h1><hr>
</div>
