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
    <script>
      function toggle(e){
        if(e.className=='selected'){
          e.className=''
	} else {
          e.className='selected'
	}
      }
    </script>
    <style>
      table {
        border: 1px solid black;
        width: 800px;
      }
      tr {
        height: 140px;
      }
      td {
	text-align: center;
        font-size: 20px;
        font-family: Calibri;
        font-weight: bold;
	width: 100px;
        border: 1px solid black;
      }
      td.selected {
        background-color: #bbbbbb;
      }
      body, html {
        height: 100%;
      }

      /* The hero image */
      .hero-image {
        background-image: url("axp-bingo-banner.jpg");

        /* Set a specific height */
        height: 200px;

        /* Position and center the image to scale nicely on all screens */
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
      }

      /* Place text in the middle of the image */
      .hero-text {
        text-align: center;
        position: absolute;
        top: 50%;
        left: 50%;
      }
    </style>
  </head>
  <body>
    <div class="hero-image">
      <div class="hero-text">
      </div>
    </div>
    <table align='center'>
<?php
  for($x = 0 ; $x < 5 ; $x++){
    print "<tr>";
    for($y = 0 ; $y < 5 ; $y++){
      if($x == 2 && $y == 2){
        print "<td class='selected'>Crew Cat<br>(Free space)</td>";
      } else {
        $z = rand(0,count($values)-1);
        print "<td onclick=toggle(event.srcElement)>$values[$z]</td>";
      }
    }
    print "</tr>";
  }
?>
    </table>
  </body>
</html>

