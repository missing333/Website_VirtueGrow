<html>
<?php $pageName = "Grow"; ?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>VirtueGrow</title>
	<link rel="shortcut icon" href="Art\Icons\LogoFavicon32.png" type="image/x-icon">

  <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <script type="text/javascript" src="jscript.js"></script>
  <link rel="stylesheet" href="style.css">
</head>



<body class="gradient-pattern">


  <?php include("header.html");?>


  <div id="wrapper">
    <div id="growMain">
      <div id="grow">
        <center>
          <div id="challengeBox">
            <h3>Grow in Virtue Today:</h3>
          </div>
          <div id="challenge" class="shadowbox"></div>
        </center>
        <script>
          (function() {
            var challenges = [{
                virtue: "Kindness",
                text: "Tell someone that you appreciated talking to them.",
                img: "Art/Icons/kinBevel.png"
              },
              {
                virtue: "Generosity",
                text: "Give a compliment to 3 people.",
                img: "Art/Icons/genBevel.png"
              },
              {
                virtue: "Humility",
                text: "Learn something new about 1 person.",
                img: "Art/Icons/humBevel.png"
              },
              {
                virtue: "Moderation",
                text: "Sacrifice 1 snack today.",
                img: "Art/Icons/modBevel.png"
              },
              {
                virtue: "Chastity",
                text: "Check behind you when opening doors today, and let someone else through first if they are behind you.",
                img: "Art/Icons/chaBevel.png"
              },
              {
                virtue: "Diligence",
                text: "Read a book for 15 minutes.",
                img: "Art/Icons/dilBevel.png"
              },
              {
                virtue: "Patience",
                text: "Wait an extra 10 minutes for something you enjoy or want.",
                img: "Art/Icons/patBevel.png"
              },
              {
                virtue: "Kindness",
                text: "Talk with someone who is going through a rough time.",
                img: "Art/Icons/kinBevel.png"
              },
              {
                virtue: "Generosity",
                text: "Give a small donation to the next person who asks you for money.",
                img: "Art/Icons/genBevel.png"
              },
              {
                virtue: "Humility",
                text: "Ask someone for help.",
                img: "Art/Icons/humBevel.png"
              },
              {
                virtue: "Moderation",
                text: "Exercise/stretch for 10 minutes today.",
                img: "Art/Icons/modBevel.png"
              },
              {
                virtue: "Chastity",
                text: "Ask someone about their favorite (food/hobby/vacation/etc.)",
                img: "Art/Icons/chaBevel.png"
              },
              {
                virtue: "Diligence",
                text: "Write 'I will grow in virtue today' 5 times.",
                img: "Art/Icons/dilBevel.png"
              },
              {
                virtue: "Patience",
                text: "Take 3 deep breaths the next time you get angry/frustrated, before doing anything else. ",
                img: "Art/Icons/patBevel.png"
              }
            ];
            var challenge = challenges[Math.floor(Math.random() * challenges.length)];
            document.getElementById("challenge").innerHTML =
              '<h2>' + challenge.virtue + '</h2>' +
              '<img class="virtue-icon" src="' + challenge.img + '">' +
              '<p>' + challenge.text + '</p>';
          })();
        </script>
      </div>

    </div><!-- mainSection -->


  </div>
  <!--wrapper-->

  <?php include("footer.html");?>

</body>



</html>
