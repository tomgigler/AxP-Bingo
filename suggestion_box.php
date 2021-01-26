<?php

include "settings.inc";

if (isset($_POST['NAME']) && isset($_POST['NAME']))
{
  if($_POST['NAME'] == ""){
    $message = "<center><font color='red'><b>--A name is required--</b></font></center><br>\n";
  } elseif($_POST['SUGGESTION'] == ""){
    $message = "<center><font color='red'><b>--Suggestion is required--</b></font></center><br>\n";
  } else {
    $connection = new mysqli("localhost", $db_user, $db_pass, $db_name);
    $connection->set_charset("utf8mb4");
    $stmt = $connection->prepare("INSERT INTO suggestions values (?, ?) ON DUPLICATE KEY UPDATE name = ?");
    $stmt->bind_param('sss', $_POST['NAME'], $_POST['SUGGESTION'], $_POST['NAME']);
    $stmt->execute();
    $stmt->close();
    $connection->close();
    $message = "<center><font color='green'><b>--Thank you for your suggestion--</b></font></center><br>\n";
  }
}

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

    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <div class="hero-image">
      <div class="hero-text">
      </div>
    </div>
    <div class="footer">
      <center>
<?php
if (isset($message))
{
  print "<br>".$message."\n";
  unset($message);
} else {
  print "<br><br><br>\n";
}
?>
        <form id="suggestion-form" name='form' method='POST' enctype='multipart/form-data' autocomplete='off'>
           <center>
             <b>Your name:</b><br><input type='text' name='NAME' size="50" maxlength="50"/><br>
             <br>
             <b>Your suggestion:</b><br><textarea name="SUGGESTION" cols="100" rows="10" style="resize: none;" maxlength="650"></textarea></br>
             <br>
             <button onclick=submit()>Submit</buton>
           </center>
        </form>
        <br>
        Click <a href="index.php">here</a> to return to the main page
        <br><br>
        This site is not affiliated with the <a href="https://atheist-community.org">ACA</a> or <a href="https://www.axp.show">The Atheist Experience</a>
        <br><br>
      </center>
    </div>
  </body>
</html>

