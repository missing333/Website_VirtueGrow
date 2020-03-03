<html>
<?php $pageName = "Grow"; ?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Grow</title>
	<link rel="shortcut icon" href="Art\Icons\LogoFavicon32.png" type="image/x-icon">

  <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <script type="text/javascript" src="jscript.js"></script>
  <link rel="stylesheet" href="style.css">

  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112386024-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-112386024-1');
</script>
</head>



<body class="gradient-pattern">


  <?php include("header.html");?>


  <div id="main">
    <div id="growMain">
      <div id="grow">
        <center>
          <div id="challengeBox">
            <h3>Grow in Virtue,  Every day.</h3>
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
                text: "Ask someone for help.  They might be able to!",
                img: "Art/Icons/humBevel.png"
              },
              {
                virtue: "Moderation",
                text: "Exercise/stretch for 10 minutes today.",
                img: "Art/Icons/modBevel.png"
              },
              {
                virtue: "Chastity",
                text: "Groom yourself with greater care today.  Cleanliness of Body leads to cleanliness of Mind.",
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
              },
              {
                virtue: "Kindness",
                text: 'Recite the ' + '<a href="https://www.ourcatholicprayers.com/litany-of-the-saints.html" target="_blank">' + 'Litany of the Saints' + '</a>',
                img: "Art/Icons/kinBevel.png"
              },
              {
                virtue: "Generosity",
                text: 'Recite the <strong>Glory to God in the Highest</strong>.' + '<br><div class="prayer">'+
                'Glory to God in the highest,' + '<br>' +
                'and on earth peace to people of good will.' + '<br>' + '<br>' +
                'We praise you, we bless you,' + '<br>' +
                'we adore you, we glorify you,' + '<br>' +
                'we give you thanks for your great glory.' + '<br>' + '<br>' +
                'Lord God, heavenly King, O God, almighty Father.' + '<br>' +
                'Lord Jesus Christ, Only Begotten Son,' + '<br>' +
                'Lord God, Lamb of God, Son of the Father,' + '<br>' + '<br>' +
                'you take away the sins of the world,' + '<br>' +
                'have mercy on us;' + '<br>' +
                'you take away the sins of the world,' + '<br>' +
                'receive our prayer;' + '<br>' +
                'you are seated at the right hand of the Father,' + '<br>' +
                'have mercy on us.' + '<br>' + '<br>' +
                'For you alone are the Holy One,' + '<br>' +
                'you alone are the Lord,' + '<br>' +
                'you alone are the Most High, Jesus Christ,' + '<br>' + '<br>' +
                'with the Holy Spirit,' + '<br>' +
                'in the glory of God the Father.' + '<br>' +
                'Amen.' +
                '</div>',
                img: "Art/Icons/genBevel.png"
              },
              {
                virtue: "Humility",
                text: "Pause for self-reflection this evening, and ask yourself what you could have done better today.",
                img: "Art/Icons/humBevel.png"
              },
              {
                virtue: "Moderation",
                text: "Leave 10% of your meal on the plate as a tithe.",
                img: "Art/Icons/modBevel.png"
              },
              {
                virtue: "Chastity",
                text: 'Recite the <strong>Summae Deus Clementiae</strong>.' + '<br><div class="prayer">'+
                'Great God of boundless mercy hear;' + '<br>' +
                'Thou Ruler of this earthly sphere;' + '<br>' +
                'in substance one, in Persons three,' + '<br>' +
                'dread Trinity in Unity!' + '<br>' + '<br>' +

                'Do Thou in love accept our lays' + '<br>' +
                'of mingled penitence and praise;' + '<br>' +
                'and set our hearts from error free,' + '<br>' +
                'more fully to rejoice in Thee.' + '<br>' + '<br>' +

                'Our reins and hearts in pity heal,' + '<br>' +
                'and with Thy chastening fire anneal;' + '<br>' +
                'gird Thou our loins, each passion quell,' + '<br>' +
                'and every harmful lust expel.' + '<br>' + '<br>' +

                'Now as our anthems, upward borne,' + '<br>' +
                'awake the silence of the morn,' + '<br>' +
                'enrich us with Thy gifts of grace,' + '<br>' +
                'from heaven, Thy blissful dwelling place!' + '<br>' + '<br>' +

                'Hear Thou our prayer, Almighty King;' + '<br>' +
                'hear Thou our praises, while we sing,' + '<br>' +
                'adoring with the heavenly host' + '<br>' +
                'the Father, Son and Holy Ghost.' +
                '</div>',
                img: "Art/Icons/chaBevel.png"
              },
              {
                virtue: "Diligence",
                text: "Read about the lives of the Saints.",
                img: "Art/Icons/dilBevel.png"
              },
              {
                virtue: "Patience",
                text: 'Recite the <strong>Agnus Dei</strong>.' + '<br><div class="prayer">'+
                'Lamb of God, ' + '<br>' +
                'you take away the sin of the world,' + '<br>' +
                'have mercy on us.' + '<br>' + '<br>' +
                'Lamb of God, ' + '<br>' +
                'you take away the sin of the world,' + '<br>' +
                'have mercy on us.' + '<br>' + '<br>' +
                'Lamb of God, ' + '<br>' +
                'you take away the sin of the world,' + '<br>' +
                'grant us peace.' +
                '</div>',
                img: "Art/Icons/patBevel.png"
              }
            ];
            var challenge = challenges[Math.floor(Math.random() * challenges.length)];
            document.getElementById("challenge").innerHTML =
              '<h2>' + challenge.virtue + '</h2>' +
              '<img class="virtue-icon" style="margin:10px" src=" ' + challenge.img + '">' +
              '<p style="text-indent:0px">' + challenge.text + '</p>';
          })();
        </script>
      </div>

    </div><!-- mainSection -->


  </div>
  <!--wrapper-->

  <?php include("footer.html");?>

</body>



</html>
