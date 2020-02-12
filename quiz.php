<html>
<?php $pageName = "Quiz"; ?>
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
  <div id="wrapper">


    <?php include("header.html");?>


    <div id="quizMain">
      <div id="quiz">
        <div id="interact-59b312a756b6910012373c7d"></div>
        <script type="text/javascript">
          var app_59b312a756b6910012373c7d;
          (function(d, t) {
            var s = d.createElement(t),
              options = {
                "appId": "59b312a756b6910012373c7d",
                "aspect_ratio": "100%",
                "async": true,
                "host": "quiz.tryinteract.com",
                "footer": "hide"
              };
            s.src = 'https://i.tryinteract.com/embed/app.js';
            s.onload = s.onreadystatechange = function() {
              var rs = this.readyState;
              if (rs)
                if (rs != 'complete')
                  if (rs != 'loaded') return;
              try {
                app_59b312a756b6910012373c7d = new InteractApp();
                app_59b312a756b6910012373c7d.initialize(options);
                app_59b312a756b6910012373c7d.display();
              } catch (e) {}
            };
            var scr = d.getElementsByTagName(t)[0],
              par = scr.parentNode;
            par.insertBefore(s, scr);
          })(document, 'script');
        </script>
      </div>

    </div><!-- mainSection -->


    <?php include("footer.html");?>
  </div>
  <!--wrapper-->
</body>



</html>
