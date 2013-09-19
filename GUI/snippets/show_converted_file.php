<?PHP
/**
* GUI Template: converted file
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
<div class="well">
    <?PHP     
    $id_summary = md5($snippet_file) . '_summary';    
    if (($snippet_conv['found'] == $snippet_conv['converted']) && (count($snippet_conv['errors']) == 0)) {
        $title = 'OK ';
        $class = 'text-success';                             
    } else if (($snippet_conv['found'] == $snippet_conv['converted']) && (count($snippet_conv['errors']) > 0)) {
        $title = 'Warning: ';
        $class = 'text-warning';                     
    } else {
        $title = 'Error: ';
        $class = 'text-danger';
    }    
    ?>
    <table class="conversionheadline table table-striped table-hover table-bordered">
    <tr>
        <td><?php printf('<span class="%s toggle" onclick=\'toggle_view("%s")\'>%s</span>', $class, $id_summary, ($snippet_show_details) ? '+' : '+'); ?></td>
        <td align="right">
            <?php        
            printf('<span class="%s">%s</span>', $class, $title);
            ?>                      
        </td>
        <td width="99%">
            <span class="<?php print $class; ?>"><?php print $snippet_file; ?></span>
        </td>
    </tr>
    </table><hr>
    <div class="conversiondetails" id="<?php print $id_summary; ?>"  <?php if ($snippet_show_details) print 'style="display:inline"'; ?>>
    <p class="lead" style="margin-left:20px;">Summary</p>
    <table cellpadding="0" cellspacing="0" class="table table-striped table-hover table-bordered" style="width:98%; margin:0 auto;">
    <tr>
        <th align="right">Found&nbsp;equals&nbsp;Converted?</th>
        <th align="right">Found</th>
        <th align="right">Converted</th>        
        <th align="right">Warnings/Errors</th>
        <th align="right">File&nbsp;update</th>
        <th align="right">File&nbsp;backup</th>        
        <th align="right" width="99%">Length</th>
    </tr>
    <tr>
        <td align="right"><?php print ($snippet_conv['found'] == $snippet_conv['converted']) ? 'Yes' : 'No'; ?></td>
        <td align="right"><?php print $snippet_conv['found']; ?></td>
        <td align="right"><?php print $snippet_conv['converted']; ?></td>
        <td align="right"><?php print count($snippet_conv['errors']); ?></td>
        <td align="right"><?php print ($snippet_conv['update']) ? 'Yes' : 'No'; ?></td>
        <td align="right"><?php print ($snippet_conv['rename']) ? 'Yes' : 'No'; ?></td>        
        <td align="right"><?php print strlen($snippet_conv['output']); ?></td>
    </tr>    
    </table><hr>   
    <?php if (!empty($snippet_conv['errors'])) { ?>
    <p class="lead" style="margin-left:20px;">Warnings/Errors</p>
    <table cellpadding="0" cellspacing="0" class="table table-striped table-hover table-bordered">    
    <tr>
        <td>Line</td>
        <td>Message</td>
    </tr>
    <?PHP
    foreach ($snippet_conv['errors'] as $k => $msg) {
    ?>
    <tr class="<?php print ($k % 2) ? 'tddark' : 'tdbright'; ?>">
        <td><?php print $msg['line']; ?></td>
        <td><?php print $msg['msg']; ?></td>
    </tr>
    <?PHP
    } 
    ?>
    </table><hr>
    <?php } ?>
    <p class="lead" style="margin-left:20px;">Generated Code</p>
    <div class="well" style="width:98%; margin:0 auto;">
        <?php highlight_string($snippet_conv['output']) ?>
    </div>
       <br />&nbsp;
    </div>
</div>
