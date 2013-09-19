<?PHP
/**
* GUI Template: page footer
*
* @category   GUI
* @package    MySQLConverterTool
* @author     Saif Lacrimosa
* @copyright  2013
*/
?>
</div>
<hr><div class="footer">
            <div id="back-top" style="float:right;margin-top:-10px;">
              <a href="#" class="btn btn-info"><span class="glyphicon glyphicon-circle-arrow-up"></span></a>
            </div>
            <p>MySQL ext/mysql Converter Tool &copy; 2013</p>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.js"></script>
<script src="js/collapse.js"></script>
<script src="js/dropdown.js"></script>

<script src="http://platform.twitter.com/widgets.js"></script>
<script src="js/holder.js"></script>
<script src="js/application.js"></script>

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