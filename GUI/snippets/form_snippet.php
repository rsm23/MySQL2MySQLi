<?PHP
/**
* GUI Template: convert code snippet form
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
<p class="lead text-primary">
    Convert a snippet
</p>
<p class="text-primary">
    You can choose if the result of the conversion gets displayed on the 
    screen or if you want to modify the source snippet. By default a
    backups of the source snippet will be created before 
    it gets modified.
</p>
<?PHP
if (!empty($snippet_errors)) {
?>
<div class="maintextbox">
    <h2>Errors</h2>    
    <ul>
    <?PHP
    foreach ($snippet_errors as $field => $msg)
        printf('<li class="error">%s</li>', htmlspecialchars($msg));
    ?>
    </ul>    
</div>            
<?php
}
?>  
<div class="maintextbox">    
<form action="<?php print $_SERVER['PHP_SELF']; ?>" name="snippet" id="snippet" method="post">
    <script language="JavaScript">
        
        function activate_backup() {                     
                        
            if (document.snippet.update[0].checked == true)
                document.snippet.backup.checked = false;
                
            if (document.snippet.update[1].checked == true)
                document.snippet.backup.checked = true;            
            
        }
        
        function validate_form() {
            
            if (document.snippet.snippet.value == "") {
                document.snippet.snippet.focus();
                alert("Please specify a snippet!");                
                return false;
            }
            
            return true;
        }
        
    </script>
        <p class="lead">Convert a snippet</p>
        <br />
        <table class="table table-striped table-bordered table-hover">        
        <tr>
            <td class="<?php print isset($snippet_errors['snippet']) ? 'formlabelerror' : 'formlabel'; ?>">Snippet</td>
            <td class="formelement"><textarea name="snippet" cols="40" rows="10"><?php print (isset($_POST['snippet'])) ? $_POST['snippet'] : ''; ?></textarea></td>
        </tr>        
        <tr>
            <td></td>
            <td class="formhint">
                <p class="text-danger"><strong>Make sure to use &lt;?php and &gt; to enclose the PHP code which you want to convert.
                For example, if you want to see how "mysql_connect()" gets converted, insert "&lt;?php mysql_connect() ?&gt;".</strong></p>
            </td>
        <tr>
        <tr>
            <td colspan="2" class="formsubmit">
                <input type="submit" name="start" class="btn btn-info" value="Start the conversion" onclick="return validate_form()">&nbsp;&nbsp;
                <input type="submit" name="cancel" class="btn btn-info" value="Cancel">
            </td>
        </tr>        
        </table>
</form>
</div>