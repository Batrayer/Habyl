<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Habyl</title>
	<link href="<?php echo asset('stylesheets/habyl.css')?>" rel="stylesheet" type="text/css">
	<link rel="icon" type="image/png" href="favicon.png" />

</head>

<body id="body">

	<div class="site-container">
		<header class="header">
			<a href="/" class="header__icon" id="header__icon"></a>
			<a href="/" class="header__logo"><img src="../../Habyl.png" alt="Habyl" width="170"></a>
			<nav class="menu">
				<a href="#">Link 1</a>
				<a href="#">Link 2</a>
				<a href="#">Link 3</a>
				<a href="#">Link 4</a>
				<a href="#">Link 5</a>
			</nav>
		</header>
		<div class="site-pusher">

			<div class="site-content">
				<div class="container">

					<div class="row">
						<div class="col s2 blue-lighter7" style="height:800px"></div>
						<div class="col s10 blue-lighter5" style="height:800px"></div>
					</div>

					<div class="row">
						<div class="col s12 footer purple-lighter5 white-text" style="height: 120px">
							<div class="col s12">
								<p></p>
							</div>
						</div>
					</div>

				</div>

			<div class="site-cache" id="site-cache"></div>
		</div>
	</div>
</body>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.4/hammer.js"></script>
<script src="<?php echo asset('js/habyl.js')?>" type="text/javascript" charset="utf-8" async defer></script>
</html>