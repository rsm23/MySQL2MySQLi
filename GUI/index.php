<?PHP
/**
* GUI index page
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

require_once('snippets/MySQLConverterTool_GUI_Snippets.php');

$snippet_title = 'Welcome to the MySQL ext/mysql Converter Tool';
$snippet_greeting = 'Welcome to the MySQL ext/mysq Converter Tool';

MySQLConverterTool_GUI_Snippets::load(dirname(__FILE__) . '/snippets/header.php');
?>

<div class="maintextbox">
    <p class="text-primary">You have successfully installed the MySQL ext/mysql Converter Tool.
    The tool helps you to migrate existing PHP code using the PHP MySQL Extension
    (ext/mysql) to the PHP MySQLi Extension (ext/mysqli). The tool reads the source code
    and converts all MySQL functions into their MySQLi counterparts.</p><hr>
</div>
<div class="maintextbox">
    <p class="lead text-primary">Select one of the following actions:</p>
</div>
<div class="maintextbox" style="padding-left:1em">
    <a href="convert_directory.php" class="btn btn-danger btn-lg">Convert a directory</a>
    <small>Use this to convert all PHP files contained in one</small>
    directory.        
</div>
<div class="maintextbox" style="padding-left:1em">
    <a href="convert_file.php" class="btn btn-danger btn-lg">Convert a file</a>
    <small>Use this to convert a single PHP file.</small>
</div>
<div class="maintextbox" style="padding-left:1em">
    <a href="convert_snippet.php" class="btn btn-danger btn-lg">Convert a code snippet</a>
    <small>Use this to convert a snippet, a piece of PHP code.</small>
</div>    
<?php
MySQLConverterTool_GUI_Snippets::load(dirname(__FILE__) . '/snippets/footer.php');
?>