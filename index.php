<?php
$values = array("No no no, you're done",
"Caller hang up",
"Caller on mute",
"Matt loses his zen",
"Discord shout out",
"RfR shout out",
"Secular Therapy Project shout out",
"Universe farting pixies",
"Defending slavery",
"Post Hoc Explanation",
"Hermetics",
"Look at the trees, universe, and everything",
"Special guest host",
"Atheists lack morality",
"Caller had a supernatural experience",
"Faith is a feeling",
"Fear of hell",
"Fear of being wrong",
"Coming out issues",
"Quantum mechanics=God?",
"Why should we care?",
"Evolution is just a theory",
"God started evolution",
"Go get your Nobel Prize",
"Exodus 21",
"It's my show and I will swear if I want to",
"Stop telling me what I believe",
"Pascals Wager",
"Bible codes/numbers",
"Gumball analogy",
"Coin toss analogy",
"Moving the goal posts",
"I know that I know what I know",
"Fuck off!",
"Do you think slavery is moral?",
"I was a Christian 20 years ago",
"Caller used to be an atheist but..",
"Special Guest Cohost",
"You were just waiting for your turn to talk",
"Caller continues talking after muted",
"Prophecies are true!",
"Caller claims to know God's traits/thoughts",
"Young earth creationist",
"It must be true, the bible says so",
"Caller has proof yet never gives any",
"Lying caller/troll",
"This is a simple question. Yes or no?",
"Miracles as proof",
"Cognitive dissonance",
"Something can't come from nothing",
"Watchmaker argument",
"Bible is an immoral book",
"Would you be my slave?",
"Women bodily autonomy",
"You Sir/Ma'am are being dishonest",
"Caller evading the question",
"God of the gaps",
"Religious trauma",
"Noah's Ark was real",
"The rapture/end times",
"Science doesn't care what you believe",
"It was a different time back then",
"Repeat caller",
"Atheist caller",
"Theist caller",
"Caller completely misses the point",
"Explanation of atheism",
"What would it take for you to believe?",
"It's okay to say \"I don't know\"",
"Matt dominates a call",
"Matt steals call from cohost",
"Near death experiences",
"The soul is real claim",
"Appeal to authority",
"Do you believe in alien abductions?",
"God knows what it will take to convince me",
"Why do you think your God is the correct one?",
"Solipsism argument",
"Determinism vs. Free Will");
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

