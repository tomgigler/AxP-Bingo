<?php

$connection = new mysqli("localhost", "bingo", "foozeball3", "bingo");
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
      window.onload = function() {
        var cells = document.getElementsByTagName('td');
        for(var i = 0; i < cells.length; i++) {
          var cell = cells[i];
          cell.onclick = function(event) {
            e = event.srcElement
            if(e.className=='selected'){
              e.className=''
            } else if(e.className==''){
              e.className='selected'
            }
          }
        }
      }
    </script>
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
            print "        <td class='center-spot'>Crew Cat<br>(Free space)</td>\n";
          } else {
            $z = rand(0,count($values)-1);
            $value = $values[$z];
            \array_splice($values, $z, 1);
            print "        <td>$value</td>\n";
          }
        }
        print "      </tr>\n";
      }
    ?>
    </table>
    <div class="footer">
      <center>
        <br>
        Click on a square to mark it!  Refresh the page for a new card
        <br>
        <br>
        This site is not affiliated with the <a href="https://atheist-community.org">ACA</a> or <a href="https://www.axp.show">The Atheist Experience</a>
        <br><br>
      </center>
    </div>
  </body>
</html>

