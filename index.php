<?php

include "settings.inc";
$connection = new mysqli("localhost", $db_user, $db_pass, $db_name);
$result = $connection->query("SELECT spot FROM spots");

$values = array();
while($row = $result->fetch_row()) {
  array_push($values, $row[0]);
}

$connection->close();

?>
<html>
  <head>
    <title>AXP Bingo</title>
    <meta property="og:title" content="AXP Bingo Card" />
    <meta property="og:site_name" content="thegigler.com" />
    <meta property="og:url" content="http://www.thegigler.com/axp-bingo/" />
    <meta property="og:image" content="http://www.thegigler.com/axp-bingo/axp-bingo-thumb.jpg" />
    <meta property="og:image:width" content="438" />
    <meta property="og:image:height" content="404" />
    <link rel="shortcut icon" href="http://www.thegigler.com/axp-bingo/axp-bingo.ico"/>

    <script>
    <?php
      print "\nvar values = [\n";
      for($x = 0 ; $x < count($values) ; $x++){
        print "\"" . strtoupper($values[$x]) . "\",\n";
      }
      print "];\n\n";
    ?>
    </script>
    <script src="bingo.js"></script>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <div class="hero-image">
      <div class="hero-text">
      </div>
    </div>
    <table align='center'>
    <?php
      for($x = 0 ; $x < 5 ; $x++){
        print "      <tr>\n";
        for($y = 0 ; $y < 5 ; $y++){
          if($x == 2 && $y == 2){
            print "        <td class='center-spot'>CREW CAT<br>(Free space)</td>\n";
          } else {
            print "        <td></td>\n";
          }
        }
        print "      </tr>\n";
      }
    ?>
    </table>
    <div class="footer">
      <center>
        <br>
        Click on a square to mark it!
        <br>
        <br>
        <button id="clear_all_button" class="button" onclick=clear_all()>Clear All</button>
        <button class="button" onclick=make_card()>New Card</button>
        <button class="button" onclick="window.open('suggestion_box.php')">Suggestion Box</button>
        <br>
        <br>
        This site is not affiliated with the <a href="https://atheist-community.org">ACA</a> or <a href="https://www.axp.show">The Atheist Experience</a>
	<br><br>
        The Talk Heathen version is <a target="_blank" href="http://meghanlewisdesign.com/portfolio/talk-heathen-bingo">available here</a>!
        <br><br>
      </center>
    </div>
  </body>
</html>

