<html>
  <head>
    <title>AXP Bingo</title>
    <meta property="og:title" content="AXP Bingo Card" />
    <meta property="og:site_name" content="thegigler.com" />
    <meta property="og:url" content="http://www.thegigler.com/bingo/" />
    <meta property="og:image" content="http://www.thegigler.com/bingo/axp-bingo-thumb.jpg" />
    <meta property="og:image:width" content="438" />
    <meta property="og:image:height" content="404" />

    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <div class="hero-image">
      <div class="hero-text">
      </div>
    </div>
    <center>
      <table class="suggestions" border=1>
        <tr class="suggestions"><th class="suggestions">Name</th><th>Suggestion</th><th>Date</th></tr> 
<?php

include "settings.inc";

$connection = new mysqli("localhost", $db_user, $db_pass, $db_name);
$connection->set_charset("utf8mb4");
$result = $connection->query("SELECT * FROM suggestions ORDER BY date DESC");
while($row = $result->fetch_row()) {
  print "        <tr class=\"suggestions\">\n";
  print "          <td class=\"suggestions\">\n";
  print "            ".$row[0];
  print "          </td>\n";
  print "          <td class=\"suggestions\">\n";
  print "            ".$row[1];
  print "          </td>\n";
  print "          <td class=\"suggestions\" name=\"delivery_time\">\n";
  print "            ".$row[2];
  print "          </td>\n";
  print "        </tr>\n";
}
$connection->close();

?>
      </table>
    </center>

    <div class="footer">
      <center>
        <br><br>
        This site is not affiliated with the <a href="https://atheist-community.org">ACA</a> or <a href="https://www.axp.show">The Atheist Experience</a>
        <br><br>
      </center>
    </div>
    <script>
      function convert_times(){
        var cells = document.getElementsByName('delivery_time')
        for(var i = 0; i < cells.length; i++){
          var myDate = new Date(parseInt(cells[i].innerHTML)*1000)
          cells[i].innerHTML = myDate
        }
      }

      window.onload = function() {
        convert_times()
      }
    </script>
  </body>
</html>

