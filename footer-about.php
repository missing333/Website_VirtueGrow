<html>
<?php $pageName = "about"; ?>
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

		<div id="mainSection" class="mainSection">
			<div id="about" class="shadowbox">
				<h2>About</h2>

				<div id="text">
					<p><img src="Art\Images\familypic.jpg" alt="Family" style="width:auto;height:300px;margin:15px;float:right;margin-top:-50px;">
							Hi, my name is Marc Missildine.  I am the father of 2 beautiful girls, and the husband to an amazing, supportive wife.
							I created this website to share everything that I have learned about virtue, to challenge myself and others to become our ideal selves. </p>
				</div>

				<div id="aboutIcons" >
					<div class="item">
						<img src="Art\Icons\humBevel.png"/>
						<span class = "caption">Humility</span>
					</div>
					<div class="item">
						<img src="Art\Icons\dilBevel.png"/>
						<span class = "caption">Diligence</span>
					</div>
					<div class="item">
						<img src="Art\Icons\modBevel.png"/>
						<span class = "caption">Moderation</span>
					</div>
					<div class="item">
						<img src="Art\Icons\patBevel.png"/>
						<span class = "caption">Patience</span>
					</div>
					<div class="item">
						<img src="Art\Icons\genBevel.png"/>
						<span class = "caption">Generosity</span>
					</div>
					<div class="item">
						<img src="Art\Icons\chaBevel.png"/>
						<span class = "caption">Chastity</span>
					</div>
					<div class="item">
						<img src="Art\Icons\kinBevel.png"/>
						<span class = "caption">Kindness</span>
					</div>
				</div>

			</div>

		</div><!-- mainSection -->

		<?php include("footer.html");?>
	</div><!--wrapper-->
</body>

<style type="text/css">

#about {
	text-align:center;
	margin-left: 10%;
	margin-right: 10%;
	display: block;
}

#text {
	min-height:400px;
	display:flex;
}

#about p {
	padding-top: 80px;
}

</style>


</html>
