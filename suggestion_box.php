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
    <meta property="og:url" content="http://www.thegigler.com/bingo/" />
    <meta property="og:image" content="http://www.thegigler.com/bingo/axp-bingo-thumb.jpg" />
    <meta property="og:image:width" content="438" />
    <meta property="og:image:height" content="404" />

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
    <div class="footer">
      <br>
      <br>
      <center>
        <div style="text-align: center">
          <button class="button" onclick="location.href='index.php'">Home</button>
        </div>
        <br>
        <br>
        This site is not affiliated with the <a href="https://atheist-community.org">ACA</a> or <a href="https://www.axp.show">The Atheist Experience</a>
        <br><br>
      </center>
    </div>
  </body>
</html>

