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
		<header class="headere">
			<a href="/" class="header__icon" id="header__icon"></a>
			<a href="/" class="header__logo"><img src="../../Habyl.png" alt="Habyl" width="170"></a>
			<nav class="menu">
				<a href="/tutorial">Tutorial</a>
				<a href="#">Download</a>
				<a href="#">About us</a>
			</nav>
		</header>
		<div class="site-pusher">

			<div class="site-content">
				<div class="container">
					<div class="row">
						<div class="col s1 "></div>
							<div class="dropdown red white-text">
								<ul>
									<li>Dropdown title</li>
									<li><a href="#">Dropdown I</a></li>
									<li><a href="#">Dropdown II</a></li>
									<li><a href="#">Dropdown III</a></li>
									<li><a href="#">Dropdown IV</a></li>
									<li><a href="#">Dropdown de fdp car trop long !</a></li>
								</ul>
							</div>
						</div>
					</div>


					<!--boutons-->

					<div class="row">
					<div class="col shift-s5">
						<a href="#" class="button small blue white-text">Button</a>
						<a href="#" class="button blue white-text">Button</a>
						<a href="#" class="button large blue white-text">Button</a>
						<a href="#" class="button scrollToTop blue white-text">Top</a>
						<a href="#" class="button scrollToBottom blue white-text">Bottom</a>
						<a class="share_twitter button small blue-lighter2 white-text" data-url="http://habyl.com/test">Twitter</a>
						<a class="share_facebook button small blue-darker4 white-text" data-url="http://habyl.com/test"><img >Facebook</a>
						<a class="share_gplus button small red-darker1 white-text" data-url="http://habyl.com/test"><img >Google+</a>



					</div>
					</div>

							<!--Defilement-->
						<div class="row">
							<div class="slideshow col">
								<ul>
									<li><img src="/images/1.jpg"  width="2000px" height="500px"></li>
									<li><img src="/images/2.png"  width="2000px" height="500px"></li>
									<li><img src="/images/3.jpg"  width="2000px" height="500px"></li>
									<li><img src="/images/4.jpg"  width="2000px" height="500px"></li>
								</ul>
							</div>
						</div>

							<!-- Formulaire-->



					<div class="row">
						<div class="col s2 shift-s5">
							<form action="#" method="#"  class="form">
								<fieldset>
          							<label >First Name</label>
			  						<input class="text" type="text" class="validate">


									<select class="select light-blue-darker2">
										<option value=""></option>
										<optgroup label="Swedish Cars">
											<option value="volvo" class="reverse" >Volvo</option>
											<option value="saab" class="reverse">Saab</option>
										</optgroup>
										<optgroup label="Deutsch Auto">
											<option value="mercedes" class="reverse">Mercedes</option>
											<option value="audi" class="reverse">Audi</option>
										</optgroup>
									</select><br>


									<input type="range" name="points" min="0" max="100"><br>

									<lab²el for="male">Male</label>
										<input type="radio" name="sex" id="male" value="male"><br>
									<label for="female">Female</label>
										<input type="radio" name="sex" id="female" value="female"><br><br>

									<label for="male">Male</label>
									<input type="checkbox" name="sex" id="test1" value="male" checked="checked"><br>
									<label for="test1">ROUGE</label>
									<label for="female">Female</label>
									<input type="checkbox" name="sex" id="test2" value="female"><br>
									<label for="test2"> JAUNE</label>

									<button type="submit" value="Submit" class="button small blue white-text">Submit</button><br>
								</fieldset>
							</form>
						</div>
					</div>


					<!-- TABLEAU PRESENTATION -->
					<div class="row">
						<div class="col s2 shift-l5">
							<table class="tab presentation">
								<tr class="presentation red-darker4 ">
										<th class="">Firstname</th>
										<th class="">Lastname</th>
										<th class="">Points</th>
								</tr>
								<tr class="presentation blue-grey-darker3 ">
									<td class="">Jill</td>
									<td class="">Smith</td>
									<td class=" ">50</td>
								</tr>
								<tr class="presentation teal-darker2 ">
									<td class="">Eve</td>
									<td class="">Jackson</td>
									<td class=" ">94</td>
								</tr>
								<tr class="presentation blue-grey-darker3 ">
									<td class=" ">Jill</td>
									<td class="">Smith</td>
									<td class=" ">50</td>
								</tr>
								<tr class="presentation teal-darker2 ">
									<td class="">Eve</td>
									<td class="">Jackson</td>
									<td class="">94</td>
								</tr>
								<tr class="presentation blue-grey-darker3">
									<td class="">Jill</td>
									<td class=" ">Smith</td>
									<td class="">50</td>
								</tr>
								<tr class="presentation teal-darker2">
									<td class="">Eve</td>
									<td class="">Jackson</td>
									<td class="">94</td>
								</tr>
							</table>
							<br><br>

							<!-- TABLEAU MULTI-FONCTION-->
							<table class="tab wall5 hover-l black-border-color center">
								<tr class=" red-darker4">
										<th class="">Firstname</th>
										<th class="">Lastname</th>
										<th class="">Points</th>
								</tr>
								<tr class="blue-grey-darker3 ">
									<td class=" ">Jill</td>
									<td class="">Smith</td>
									<td class=" ">50</td>
								</tr>
								<tr class="teal-darker2">
									<td class="">Eve</td>
									<td class=" ">Jackson</td>
									<td class=" ">94</td>
								</tr>
								<tr class="blue-grey-darker3 right">
									<td class=" ">Jill</td>
									<td class="">Smith</td>
									<td class="">50</td>
								</tr>
								<tr class="teal-darker2 ">
									<td class="">Eve</td>
									<td class="">Jackson</td>
									<td class="">94</td>
								</tr>
								<tr class="blue-grey-darker3">
									<td class="">Jill</td>
									<td class=" ">Smith</td>
									<td class="">50</td>
								</tr>
								<tr class="teal-darker2">
									<td class="">Eve</td>
									<td class="">Jackson</td>
									<td class="">94</td>
								</tr>
							</table>
						</div>
					</div>



					<div class="row">
						<div class="col s4 shift-s1 presentation red-lighter7">red-lighter7</div>
						<div class="col s4 shift-s2 presentation pink-lighter7">pink-lighter7</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation red-lighter6">red-lighter6</div>
						<div class="col s4 shift-s2 presentation pink-lighter6">pink-lighter6</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation red-lighter5">red-lighter5</div>
						<div class="col s4 shift-s2 presentation pink-lighter5">pink-lighter5</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation red-lighter4">red-lighter4</div>
						<div class="col s4 shift-s2 presentation pink-lighter4">pink-lighter4</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation red-lighter3">red-lighter3</div>
						<div class="col s4 shift-s2 presentation pink-lighter3">pink-lighter3</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation red-lighter2">red-lighter2</div>
						<div class="col s4 shift-s2 presentation pink-lighter2">pink-lighter2</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation red-lighter1">red-lighter1</div>
						<div class="col s4 shift-s2 presentation pink-lighter1">pink-lighter1</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation red">red</div>
						<div class="col s4 shift-s2 presentation pink">pink</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation red-darker1">red-darker1</div>
						<div class="col s4 shift-s2 presentation pink-darker1">pink-darker1</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation red-darker2">red-darker2</div>
						<div class="col s4 shift-s2 presentation pink-darker2">pink-darker2</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation red-darker3">red-darker3</div>
						<div class="col s4 shift-s2 presentation pink-darker3">pink-darker3</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation red-darker4">red-darker4</div>
						<div class="col s4 shift-s2 presentation pink-darker4">pink-darker4</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation red-darker5">red-darker5</div>
						<div class="col s4 shift-s2 presentation pink-darker5">pink-darker5</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation red-darker6">red-darker6</div>
						<div class="col s4 shift-s2 presentation pink-darker6">pink-darker6</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation red-darker7">red-darker7</div>
						<div class="col s4 shift-s2 presentation pink-darker7">pink-darker7</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation purple-lighter7">purple-lighter7</div>
						<div class="col s4 shift-s2 presentation deep-purple-lighter7">deep-purple-lighter7</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation purple-lighter6">purple-lighter6</div>
						<div class="col s4 shift-s2 presentation deep-purple-lighter6">deep-purple-lighter6</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation purple-lighter5">purple-lighter5</div>
						<div class="col s4 shift-s2 presentation deep-purple-lighter5">deep-purple-lighter5</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation purple-lighter4">purple-lighter4</div>
						<div class="col s4 shift-s2 presentation deep-purple-lighter4">deep-purple-lighter4</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation purple-lighter3">purple-lighter3</div>
						<div class="col s4 shift-s2 presentation deep-purple-lighter3">deep-purple-lighter3</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation purple-lighter2">purple-lighter2</div>
						<div class="col s4 shift-s2 presentation deep-purple-lighter2">deep-purple-lighter2</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation purple-lighter1">purple-lighter1</div>
						<div class="col s4 shift-s2 presentation deep-purple-lighter1">deep-purple-lighter1</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation purple">purple</div>
						<div class="col s4 shift-s2 presentation deep-purple">deep-purple</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation purple-darker1">purple-darker1</div>
						<div class="col s4 shift-s2 presentation deep-purple-darker1">deep-purple-darker1</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation purple-darker2">purple-darker2</div>
						<div class="col s4 shift-s2 presentation deep-purple-darker2">deep-purple-darker2</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation purple-darker3">purple-darker3</div>
						<div class="col s4 shift-s2 presentation deep-purple-darker3">deep-purple-darker3</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation purple-darker4">purple-darker4</div>
						<div class="col s4 shift-s2 presentation deep-purple-darker4">deep-purple-darker4</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation purple-darker5">purple-darker5</div>
						<div class="col s4 shift-s2 presentation deep-purple-darker5">deep-purple-darker5</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation purple-darker6">purple-darker6</div>
						<div class="col s4 shift-s2 presentation deep-purple-darker6">deep-purple-darker6</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation purple-darker7">purple-darker7</div>
						<div class="col s4 shift-s2 presentation deep-purple-darker7">deep-purple-darker7</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation indigo-lighter7">indigo-lighter7</div>
						<div class="col s4 shift-s2 presentation blue-lighter7">blue-lighter7</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation indigo-lighter6">indigo-lighter6</div>
						<div class="col s4 shift-s2 presentation blue-lighter6">blue-lighter6</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation indigo-lighter5">indigo-lighter5</div>
						<div class="col s4 shift-s2 presentation blue-lighter5">blue-lighter5</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation indigo-lighter4">indigo-lighter4</div>
						<div class="col s4 shift-s2 presentation blue-lighter4">blue-lighter4</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation indigo-lighter3">indigo-lighter3</div>
						<div class="col s4 shift-s2 presentation blue-lighter3">blue-lighter3</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation indigo-lighter2">indigo-lighter2</div>
						<div class="col s4 shift-s2 presentation blue-lighter2">blue-lighter2</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation indigo-lighter1">indigo-lighter1</div>
						<div class="col s4 shift-s2 presentation blue-lighter1">blue-lighter1</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation indigo">indigo</div>
						<div class="col s4 shift-s2 presentation blue">blue</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation indigo-darker1">indigo-darker1</div>
						<div class="col s4 shift-s2 presentation blue-darker1">blue-darker1</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation indigo-darker2">indigo-darker2</div>
						<div class="col s4 shift-s2 presentation blue-darker2">blue-darker2</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation indigo-darker3">indigo-darker3</div>
						<div class="col s4 shift-s2 presentation blue-darker3">blue-darker3</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation indigo-darker4">indigo-darker4</div>
						<div class="col s4 shift-s2 presentation blue-darker4">blue-darker4</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation indigo-darker5">indigo-darker5</div>
						<div class="col s4 shift-s2 presentation blue-darker5">blue-darker5</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation indigo-darker6">indigo-darker6</div>
						<div class="col s4 shift-s2 presentation blue-darker6">blue-darker6</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation indigo-darker7">indigo-darker7</div>
						<div class="col s4 shift-s2 presentation blue-darker7">blue-darker7</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation cyan-lighter7">cyan-lighter7</div>
						<div class="col s4 shift-s2 presentation green-lighter7">green-lighter7</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation cyan-lighter6">cyan-lighter6</div>
						<div class="col s4 shift-s2 presentation green-lighter6">green-lighter6</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation cyan-lighter5">cyan-lighter5</div>
						<div class="col s4 shift-s2 presentation green-lighter5">green-lighter5</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation cyan-lighter4">cyan-lighter4</div>
						<div class="col s4 shift-s2 presentation green-lighter4">green-lighter4</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation cyan-lighter3">cyan-lighter3</div>
						<div class="col s4 shift-s2 presentation green-lighter3">green-lighter3</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation cyan-lighter2">cyan-lighter2</div>
						<div class="col s4 shift-s2 presentation green-lighter2">green-lighter2</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation cyan-lighter1">cyan-lighter1</div>
						<div class="col s4 shift-s2 presentation green-lighter1">green-lighter1</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation cyan">cyan</div>
						<div class="col s4 shift-s2 presentation green">green</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation cyan-darker1">cyan-darker1</div>
						<div class="col s4 shift-s2 presentation green-darker1">green-darker1</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation cyan-darker2">cyan-darker2</div>
						<div class="col s4 shift-s2 presentation green-darker2">green-darker2</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation cyan-darker3">cyan-darker3</div>
						<div class="col s4 shift-s2 presentation green-darker3">green-darker3</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation cyan-darker4">cyan-darker4</div>
						<div class="col s4 shift-s2 presentation green-darker4">green-darker4</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation cyan-darker5">cyan-darker5</div>
						<div class="col s4 shift-s2 presentation green-darker5">green-darker5</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation cyan-darker6">cyan-darker6</div>
						<div class="col s4 shift-s2 presentation green-darker6">green-darker6</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation cyan-darker7">cyan-darker7</div>
						<div class="col s4 shift-s2 presentation green-darker7">green-darker7</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation light-green-lighter7">light-green-lighter7</div>
						<div class="col s4 shift-s2 presentation lime-lighter7">lime-lighter7</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation light-green-lighter6">light-green-lighter6</div>
						<div class="col s4 shift-s2 presentation lime-lighter6">lime-lighter6</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation light-green-lighter5">light-green-lighter5</div>
						<div class="col s4 shift-s2 presentation lime-lighter5">lime-lighter5</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation light-green-lighter4">light-green-lighter4</div>
						<div class="col s4 shift-s2 presentation lime-lighter4">lime-lighter4</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation light-green-lighter3">light-green-lighter3</div>
						<div class="col s4 shift-s2 presentation lime-lighter3">lime-lighter3</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation light-green-lighter2">light-green-lighter2</div>
						<div class="col s4 shift-s2 presentation lime-lighter2">lime-lighter2</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation light-green-lighter1">light-green-lighter1</div>
						<div class="col s4 shift-s2 presentation lime-lighter1">lime-lighter1</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation light-green">light-green</div>
						<div class="col s4 shift-s2 presentation lime">lime</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation light-green-darker1">light-green-darker1</div>
						<div class="col s4 shift-s2 presentation lime-darker1">lime-darker1</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation light-green-darker2">light-green-darker2</div>
						<div class="col s4 shift-s2 presentation lime-darker2">lime-darker2</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation light-green-darker3">light-green-darker3</div>
						<div class="col s4 shift-s2 presentation lime-darker3">lime-darker3</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation light-green-darker4">light-green-darker4</div>
						<div class="col s4 shift-s2 presentation lime-darker4">lime-darker4</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation light-green-darker5">light-green-darker5</div>
						<div class="col s4 shift-s2 presentation lime-darker5">lime-darker5</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation light-green-darker6">light-green-darker6</div>
						<div class="col s4 shift-s2 presentation lime-darker6">lime-darker6</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation light-green-darker7">light-green-darker7</div>
						<div class="col s4 shift-s2 presentation lime-darker7">lime-darker7</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation teal-lighter7">teal-lighter7</div>
						<div class="col s4 shift-s2 presentation yellow-lighter7">yellow-lighter7</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation teal-lighter6">teal-lighter6</div>
						<div class="col s4 shift-s2 presentation yellow-lighter6">yellow-lighter6</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation teal-lighter5">teal-lighter5</div>
						<div class="col s4 shift-s2 presentation yellow-lighter5">yellow-lighter5</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation teal-lighter4">teal-lighter4</div>
						<div class="col s4 shift-s2 presentation yellow-lighter4">yellow-lighter4</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation teal-lighter3">teal-lighter3</div>
						<div class="col s4 shift-s2 presentation yellow-lighter3">yellow-lighter3</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation teal-lighter2">teal-lighter2</div>
						<div class="col s4 shift-s2 presentation yellow-lighter2">yellow-lighter2</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation teal-lighter1">teal-lighter1</div>
						<div class="col s4 shift-s2 presentation yellow-lighter1">yellow-lighter1</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation teal">teal</div>
						<div class="col s4 shift-s2 presentation yellow">yellow</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation teal-darker1">teal-darker1</div>
						<div class="col s4 shift-s2 presentation yellow-darker1">yellow-darker1</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation teal-darker2">teal-darker2</div>
						<div class="col s4 shift-s2 presentation yellow-darker2">yellow-darker2</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation teal-darker3">teal-darker3</div>
						<div class="col s4 shift-s2 presentation yellow-darker3">yellow-darker3</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation teal-darker4">teal-darker4</div>
						<div class="col s4 shift-s2 presentation yellow-darker4">yellow-darker4</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation teal-darker5">teal-darker5</div>
						<div class="col s4 shift-s2 presentation yellow-darker5">yellow-darker5</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation teal-darker6">teal-darker6</div>
						<div class="col s4 shift-s2 presentation yellow-darker6">yellow-darker6</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation teal-darker7">teal-darker7</div>
						<div class="col s4 shift-s2 presentation yellow-darker7">yellow-darker7</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation amber-lighter7">amber-lighter7</div>
						<div class="col s4 shift-s2 presentation orange-lighter7">orange-lighter7</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation amber-lighter6">amber-lighter6</div>
						<div class="col s4 shift-s2 presentation orange-lighter6">orange-lighter6</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation amber-lighter5">amber-lighter5</div>
						<div class="col s4 shift-s2 presentation orange-lighter5">orange-lighter5</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation amber-lighter4">amber-lighter4</div>
						<div class="col s4 shift-s2 presentation orange-lighter4">orange-lighter4</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation amber-lighter3">amber-lighter3</div>
						<div class="col s4 shift-s2 presentation orange-lighter3">orange-lighter3</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation amber-lighter2">amber-lighter2</div>
						<div class="col s4 shift-s2 presentation orange-lighter2">orange-lighter2</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation amber-lighter1">amber-lighter1</div>
						<div class="col s4 shift-s2 presentation orange-lighter1">orange-lighter1</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation amber">amber</div>
						<div class="col s4 shift-s2 presentation orange">orange</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation amber-darker1">amber-darker1</div>
						<div class="col s4 shift-s2 presentation orange-darker1">orange-darker1</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation amber-darker2">amber-darker2</div>
						<div class="col s4 shift-s2 presentation orange-darker2">orange-darker2</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation amber-darker3">amber-darker3</div>
						<div class="col s4 shift-s2 presentation orange-darker3">orange-darker3</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation amber-darker4">amber-darker4</div>
						<div class="col s4 shift-s2 presentation orange-darker4">orange-darker4</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation amber-darker5">amber-darker5</div>
						<div class="col s4 shift-s2 presentation orange-darker5">orange-darker5</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation amber-darker6">amber-darker6</div>
						<div class="col s4 shift-s2 presentation orange-darker6">orange-darker6</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation amber-darker7">amber-darker7</div>
						<div class="col s4 shift-s2 presentation orange-darker7">orange-darker7</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation deep-orange-lighter7">deep-orange-lighter7</div>
						<div class="col s4 shift-s2 presentation brown-lighter7">brown-lighter7</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation deep-orange-lighter6">deep-orange-lighter6</div>
						<div class="col s4 shift-s2 presentation brown-lighter6">brown-lighter6</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation deep-orange-lighter5">deep-orange-lighter5</div>
						<div class="col s4 shift-s2 presentation brown-lighter5">brown-lighter5</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation deep-orange-lighter4">deep-orange-lighter4</div>
						<div class="col s4 shift-s2 presentation brown-lighter4">brown-lighter4</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation deep-orange-lighter3">deep-orange-lighter3</div>
						<div class="col s4 shift-s2 presentation brown-lighter3">brown-lighter3</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation deep-orange-lighter2">deep-orange-lighter2</div>
						<div class="col s4 shift-s2 presentation brown-lighter2">brown-lighter2</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation deep-orange-lighter1">deep-orange-lighter1</div>
						<div class="col s4 shift-s2 presentation brown-lighter1">brown-lighter1</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation deep-orange">deep-orange</div>
						<div class="col s4 shift-s2 presentation brown">brown</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation deep-orange-darker1">deep-orange-darker1</div>
						<div class="col s4 shift-s2 presentation brown-darker1">brown-darker1</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation deep-orange-darker2">deep-orange-darker2</div>
						<div class="col s4 shift-s2 presentation brown-darker2">brown-darker2</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation deep-orange-darker3">deep-orange-darker3</div>
						<div class="col s4 shift-s2 presentation brown-darker3">brown-darker3</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation deep-orange-darker4">deep-orange-darker4</div>
						<div class="col s4 shift-s2 presentation brown-darker4">brown-darker4</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation deep-orange-darker5">deep-orange-darker5</div>
						<div class="col s4 shift-s2 presentation brown-darker5">brown-darker5</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation deep-orange-darker6">deep-orange-darker6</div>
						<div class="col s4 shift-s2 presentation brown-darker6">brown-darker6</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation deep-orange-darker7">deep-orange-darker7</div>
						<div class="col s4 shift-s2 presentation brown-darker7">brown-darker7</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation grey-lighter7">grey-lighter7</div>
						<div class="col s4 shift-s2 presentation blue-grey-lighter7">blue-grey-lighter7</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation grey-lighter6">grey-lighter6</div>
						<div class="col s4 shift-s2 presentation blue-grey-lighter6">blue-grey-lighter6</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation grey-lighter5">grey-lighter5</div>
						<div class="col s4 shift-s2 presentation blue-grey-lighter5">blue-grey-lighter5</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation grey-lighter4">grey-lighter4</div>
						<div class="col s4 shift-s2 presentation blue-grey-lighter4">blue-grey-lighter4</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation grey-lighter3">grey-lighter3</div>
						<div class="col s4 shift-s2 presentation blue-grey-lighter3">blue-grey-lighter3</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation grey-lighter2">grey-lighter2</div>
						<div class="col s4 shift-s2 presentation blue-grey-lighter2">blue-grey-lighter2</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation grey-lighter1">grey-lighter1</div>
						<div class="col s4 shift-s2 presentation blue-grey-lighter1">blue-grey-lighter1</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation grey">grey</div>
						<div class="col s4 shift-s2 presentation blue-grey">blue-grey</div>
					</div>					
					<div class="row">
						<div class="col s4 shift-s1 presentation grey-darker1">grey-darker1</div>
						<div class="col s4 shift-s2 presentation blue-grey-darker1">blue-grey-darker1</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation grey-darker2">grey-darker2</div>
						<div class="col s4 shift-s2 presentation blue-grey-darker2">blue-grey-darker2</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation grey-darker3">grey-darker3</div>
						<div class="col s4 shift-s2 presentation blue-grey-darker3">blue-grey-darker3</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation grey-darker4">grey-darker4</div>
						<div class="col s4 shift-s2 presentation blue-grey-darker4">blue-grey-darker4</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation grey-darker5">grey-darker5</div>
						<div class="col s4 shift-s2 presentation blue-grey-darker5">blue-grey-darker5</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation grey-darker6">grey-darker6</div>
						<div class="col s4 shift-s2 presentation blue-grey-darker6">blue-grey-darker6</div>
					</div>
					<div class="row">
						<div class="col s4 shift-s1 presentation grey-darker7">grey-darker7</div>
						<div class="col s4 shift-s2 presentation blue-grey-darker7">blue-grey-darker7</div>
					</div>

					<div class="row">
						<div class="col s4 shift-s1 presentation white">white</div>
						<div class="col s4 shift-s2 presentation black white-text">black</div>
					</div>

					<div class="row">
					<div class="col shift-s5">
						<a class="button small blue white-text">Button</a>
						<a class="button blue white-text">Button</a>
						<a class="button large blue white-text">Button</a>
						<a class="button scrollToTop blue white-text">Top</a>
						<a class="button scrollToBottom blue white-text">Bottom</a>
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
<script src="<?php echo asset('js/habyl.js')?>" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo asset('js/Slideshow.js')?>" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo asset('js/Dropdown.js')?>" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo asset('js/Button.js')?>" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo asset('js/SocialButton.js')?>" type="text/javascript" charset="utf-8"></script>

<script>
	Slideshow({
		duration:1000,
		duration_sleep:1000,
		direction:"right",
		animation:"slide"
	});

	Dropdown({
		speed:100,
		type:"hover",
		taille:10,
		position:"absolute"
	});
</script>
</html>