<?PHP
/**
* GUI Template: convert directory form
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
    Read all files from a directory and convert them. 
</p>
<p class="text-primary">
    You can choose if the result of the conversion gets only displayed on the 
    screen or if you want to modify the source files. By default 
    backups of the source files will be created before 
    they get modified. A search pattern can be defined to restrict
    the search for source files to a certain file suffix.
</p><hr>
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
<form action="<?php print $_SERVER['PHP_SELF']; ?>" name="directory" id="directory" method="post">
    <script language="JavaScript">
        
        function activate_backup() {                     
                        
            if (document.directory.update[0].checked == true)
                document.directory.backup.checked = false;
                
            if (document.directory.update[1].checked == true)
                document.directory.backup.checked = true;            
            
        }
        
        function validate_form() {
            
            if (document.directory.directory.value == "") {
                document.directory.directory.focus();
                alert("Please specify a directory!");                
                return false;
            }
            
            return true;
        }
        
    </script>
        <p class="lead">Convert a directory</p>
        <hr>
        <table class="table table-striped table-bordered table-hover">        
        <tr>
            <td class="<?php print isset($snippet_errors['directory']) ? 'formlabelerror' : 'formlabel'; ?>">Directory</td>
            <td class="formelement"><input type="text" class="form-control" name="directory" size="60" value="<?php echo $dir; ?>" /></td>
        </tr>        
        <tr>
            <td class="<?php print isset($snippet_errors['pattern']) ? 'formlabelerror' : 'formlabel'; ?>">File pattern</td>
            <td class="formelement"><input type="text" name="pattern" class="form-control" size="60" value="<?php print (isset($_POST['pattern'])) ? $_POST['pattern'] : '*.php, *.phps, *.php3, *.php4, *.php5'; ?>" /></td>
        <tr>
        <tr>
            <td></td>
            <td class="formhint">
                The only recognized pattern is "*". Use "," to seperate several patterns.<br />
                Examples: "myapp_*.php", "*.php", "*.php, *.php4, *.phps".             
            </td>
        <tr>
        <tr>
            <td class="<?php print (isset($snippet_errors['update'])) ? 'formlabelerror' : 'formlabel'; ?>">Update&nbsp;files?</td>
            <td class="formelement">
                <div class="btn-group" data-toggle="buttons">
                                  <label class="btn btn-primary">
                                        <input type="radio" name="update" id="update" value="no" onClick="activate_backup()" <?php print (isset($_POST['update']) && $_POST['update'] != 'no') ? '' : 'checked'; ?>> No<br />
                                    </label>
                                    <label class="btn btn-primary">
                                        <input type="radio" name="update" id="update" value="yes" onClick="activate_backup()" <?php print (isset($_POST['update']) && $_POST['update'] == 'yes') ? 'checked' : ''; ?>> Yes
                                    </label>
                                </div>
            </td>
        <tr>
        <tr>
            <td class="<?php print (isset($snippet_errors['backup'])) ? 'formlabelerror' : 'formlabel'; ?>">Backup files?</td>
            <td class="formelement">
               <div class="btn-group" data-toggle="buttons">
                    <label class="btn btn-success">
                        <input type="checkbox" name="backup" id="backup" <?php print (isset($_POST['backup'])) ? 'checked' : ''; ?>> Yes, backup the originial file to &lt;name.org&gt;              
                    </label>
                </div>
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