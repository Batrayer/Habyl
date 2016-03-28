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
			<a href="http://www.habyl.com/" class="header__icon" id="header__icon"></a>
			<a href="http://www.habyl.com/" class="header__logo"><img src="../../Habyl.png" alt="Habyl" width="170"></a>
			<nav class="menu">
				<a href="">Tutorial</a>
				<a href="#">Download</a>
				<a href="#">About us</a>
			</nav>
		</header>
		<div class="site-pusher"> 
			
			<div class="site-content">
				<div class="container">

					<div class="row">
						<div class="col s3 shift-s2">
							<h3>Row/Column system</h3>
						</div>
					</div>

					<div class="row">
						<div class="col s3 shift-s2">
							<h4>Rows and columns</h4>
						</div>
					</div>

					<div class="row">
						<div class="col l8 shift-s2">
							<p>Each lign of your work is put inside a "row" class div attribute:</p>
						</div>
					</div>

					<div class="row">
						<div class="col l8 shift-s2 blue-grey-darker6" style="padding-left: 10px">

<pre>
<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"row"</span><span class="tag">></span>
	<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"col s3 m2 l1"</span><span class="tag">></span>col s3 m2 l1<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span>
	<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"col s3 m2 l1"</span><span class="tag">></span>col s3 m2 l1<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span>
	<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"col s3 m2 l1"</span><span class="tag">></span>col s3 m2 l1<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span>
	<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"col s3 m2 l1"</span><span class="tag">></span>col s3 m2 l1<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span>
<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span></pre>

						</div>
					</div>

					<div class="row">
						<div class="col s3 m3 l3 blue white-text" style="border: solid 1px white; text-align: center;">col s3 m3 l3</div>
						<div class="col s3 m3 l3 blue white-text" style="border: solid 1px white; text-align: center;">col s3 m3 l3</div>
						<div class="col s3 m3 l3 blue white-text" style="border: solid 1px white; text-align: center;">col s3 m3 l3</div>
						<div class="col s3 m3 l3 blue white-text" style="border: solid 1px white; text-align: center;">col s3 m3 l3</div>
					</div>

					<div class="row">
						<div class="col s3 shift-s2">
							<h4>Columns responsivity</h4>
						</div>
					</div>

					<div class="row">
						<div class="col l8 shift-s2">
							<p>As you can see, each "row" is divided into twelve columns. As you may have seen, class your attributes inside the div as "col" to start creating your website. Then, columns are divided into three categories: mobile, tablets, desktop. <br>
							To better answer the change of screen size, those three categories allows for better personalisation. <br>
							"s" as in "small", for mobile, "m" as in medium, for tablets, and finally "l", as in large, for desktop screens. Put a number right after the letter to change the number of columns it takes. <br>
							Try changing the size of your screen with the example below:</p>
						</div>
					</div>

					<div class="row">
						<div class="col l8 shift-s2 blue-grey-darker6" style="padding-left: 10px">

<pre>
<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"row"</span><span class="tag">></span>
	<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"col s3 m3 l3"</span><span class="tag">></span>col s3 m3 l3<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span>
	<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"col s3 m3 l3"</span><span class="tag">></span>col s3 m3 l3<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span>
	<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"col s3 m3 l3"</span><span class="tag">></span>col s3 m3 l3<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span>
	<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"col s3 m3 l3"</span><span class="tag">></span>col s3 m3 l3<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span>
<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span></pre>

						</div>
					</div>

					<div class="row">
						<div class="col s3 m2 l1 blue white-text" style="border: solid 1px white; text-align: center;">col s3 m2 l1</div>
						<div class="col s3 m2 l1 blue white-text" style="border: solid 1px white; text-align: center;">col s3 m2 l1</div>
						<div class="col s3 m2 l1 blue white-text" style="border: solid 1px white; text-align: center;">col s3 m2 l1</div>
						<div class="col s3 m2 l1 blue white-text" style="border: solid 1px white; text-align: center;">col s3 m2 l1</div>
					</div>

					<div class="row">
						<div class="col s3 shift-s2">
							<h4>Shift it!</h4>
						</div>
					</div>

					<div class="row">
						<div class="col l8 shift-s2">
							<p>Do we agree on the fact that filling your row entirely is unnecessary? "Yes dude, it looks hideous! How do I change that?" Well don't put elements that will fill the twelve columns. "But then it sticks to the left and it looks even uglier! This Framework sucks!"<br>
							Worry not webcitizen! For we have a solution to your problem. If you want to center or simply "slide" a certain element, you simply have to add "shift-" and then the number of columns you want it to skip! <br>
							Look:</p>
						</div>
					</div>

					<div class="row">
						<div class="col l8 shift-s2 blue-grey-darker6" style="padding-left: 10px">

<pre>
<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"row"</span><span class="tag">></span>
	<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"col s6 m6 l6 shift-s3 shift-m3 shift-l3"</span><span class="tag">></span>col s6 m6 l6 shift-s3 shift-m3 shift-l3<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span>
<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span></pre>

						</div>
					</div>

					<div class="row">
						<div class="col s6 m6 l6 shift-s3 shift-m3 shift-l3 blue white-text" style="border: solid 1px white; text-align: center;">col s6 m6 l6 shift-s3 shift-m3 shift-l3</div>
					</div>

					<div class="row">
						<div class="col l8 shift-s2">
							<p>Looks good am i right? <br>
							"Yeah but what if I want to put multiples things and have it shift?" <br>
							Well, only one way to try:</p>
						</div>
					</div>

					<div class="row">
						<div class="col l8 shift-s2 blue-grey-darker6" style="padding-left: 10px">

<pre>
<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"row"</span><span class="tag">></span>
	<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"col s2 m2 l2 shift-s3 shift-m3 shift-l3"</span><span class="tag">></span>col s2 m2 l2 shift-s3 shift-m3 shift-l3<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span>
	<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"col s2 m2 l2 shift-s2 shift-m2 shift-l2"</span><span class="tag">></span>col s2 m2 l2 shift-s2 shift-m2 shift-l2<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span>
<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span></pre>

						</div>
					</div>

					<div class="row">
						<div class="col s2 m2 l2 shift-s3 shift-m3 shift-l3 blue white-text" style="border: solid 1px white; text-align: center;">col s2 m2 l2 shift-s3 shift-m3 shift-l3</div>
						<div class="col s2 m2 l2 shift-s2 shift-m2 shift-l2 blue white-text" style="border: solid 1px white; text-align: center;">col s2 m2 l2 shift-s2 shift-m2 shift-l2</div>
					</div>

					<div class="row">
						<div class="col l8 shift-s2">
							<p>The shift will push the element away from the last element in the row by the number of columns you wrote. <br>
							"Awesome!" <br>
							Did I also mention that it takes the size of the screen into account ?</p>
						</div>
					</div>

					<div class="row">
						<div class="col l8 shift-s2 blue-grey-darker6" style="padding-left: 10px">

<pre>
<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"row"</span><span class="tag">></span>
	<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"col s2 m2 l2 shift-s2 shift-m3 shift-l4"</span><span class="tag">></span>col s2 m2 l2 shift-s2 shift-m3 shift-l4<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span>
	<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"col s3 m1 l2 shift-s3 shift-m1 shift-l2"</span><span class="tag">></span>col s3 m1 l2 shift-s3 shift-m1 shift-l2<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span>
<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span></pre>

						</div>
					</div>

					<div class="row">
						<div class="col s2 m2 l2 shift-s2 shift-m3 shift-l4 blue white-text" style="border: solid 1px white; text-align: center;">col s2 m2 l2 shift-s2 shift-m3 shift-l4</div>
						<div class="col s3 m1 l2 shift-s3 shift-m1 shift-l2 blue white-text" style="border: solid 1px white; text-align: center;">col s3 m1 l2 shift-s3 shift-m1 shift-l2</div>
					</div>

					<div class="row">
						<div class="col s3 shift-s2">
							<h3>Colors</h3>
						</div>
					</div>

					<div class="row">
						<div class="col s3 shift-s2">
							<h4>Palette</h4>
						</div>
					</div>

					<div class="row">
						<div class="col l8 shift-s2">
							<p>"Wait, I have another problem, my col aren't displayed the same yours do, why?" Don't worry I'll show how to do thatt<br>
							Habyl also prepared an incredible color palette for you to use freely. To change the color of your background, simply add the desired color from our palette into the class of your element:</p>
						</div>
					</div>

					<div class="row">
						<div class="col l8 shift-s2 blue-grey-darker6" style="padding-left: 10px">

<pre>
<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"row"</span><span class="tag">></span>
	<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"col s1 red"</span><span class="tag">></span>red<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span>
	<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"col s1 pink"</span><span class="tag">></span>pink<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span>
	<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"col s1 purple"</span><span class="tag">></span>purple<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span>
	<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"col s1 green"</span><span class="tag">></span>green<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span>
	<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"col s1 lime"</span><span class="tag">></span>lime<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span>
	<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"col s1 teal"</span><span class="tag">></span>teal<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span>
	<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"col s1 yellow"</span><span class="tag">></span>yellow<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span>
	<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"col s1 orange"</span><span class="tag">></span>orange<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span>
	<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"col s1 deep-orange"</span><span class="tag">></span>deep-orange<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span>
	<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"col s1 brown"</span><span class="tag">></span>brown<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span>
<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span></pre>

						</div>
					</div>

					<div class="row">
						<div class="col s1 shift-s1 red" style="border: solid 1px white; text-align: center;">red</div>
						<div class="col s1 pink" style="border: solid 1px white; text-align: center;">pink</div>
						<div class="col s1 purple" style="border: solid 1px white; text-align: center;">purple</div>
						<div class="col s1 green" style="border: solid 1px white; text-align: center;">green</div>
						<div class="col s1 lime" style="border: solid 1px white; text-align: center;">lime</div>
						<div class="col s1 teal" style="border: solid 1px white; text-align: center;">teal</div>
						<div class="col s1 yellow" style="border: solid 1px white; text-align: center;">yellow</div>
						<div class="col s1 orange" style="border: solid 1px white; text-align: center;">orange</div>
						<div class="col s1 deep-orange" style="border: solid 1px white; text-align: center;">deep-orange</div>
						<div class="col s1 brown" style="border: solid 1px white; text-align: center;">brown</div>
					</div>

					<div class="row">
						<div class="col l8 shift-s2">
							<p>Also features variety of 14 shades, 7 lighter, 7 darker for each of the colors we offer and here how it works:</p>
						</div>
					</div>

					<div class="row">
						<div class="col l8 shift-s2 blue-grey-darker6" style="padding-left: 10px">

<pre>
<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"row"</span><span class="tag">></span>
	<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"col s1 green-lighter5"</span><span class="tag">></span>green-lighter5<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span>
	<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"col s1 green-lighter4"</span><span class="tag">></span>green-lighter4<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span>
	<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"col s1 green-lighter3"</span><span class="tag">></span>green-lighter3<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span>
	<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"col s1 green-lighter2"</span><span class="tag">></span>green-lighter2<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span>
	<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"col s1 green-lighter1"</span><span class="tag">></span>green-lighter1<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span>
	<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"col s1 green"</span><span class="tag">></span>green<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span>
	<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"col s1 green-darker1"</span><span class="tag">></span>green-darker1<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span>
	<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"col s1 green-darker2"</span><span class="tag">></span>green-darker2<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span>
	<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"col s1 green-darker3"</span><span class="tag">></span>green-darker3<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span>
	<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"col s1 green-darker4"</span><span class="tag">></span>green-darker4<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span>
<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span></pre>

						</div>
					</div>

					<div class="row">
						<div class="col s1 shift-s1 green-lighter5 " style="border: solid 1px white; text-align: center;">green-lighter5</div>
						<div class="col s1 green-lighter4 " style="border: solid 1px white; text-align: center;">green-lighter4</div>
						<div class="col s1 green-lighter3 " style="border: solid 1px white; text-align: center;">green-lighter3</div>
						<div class="col s1 green-lighter2 " style="border: solid 1px white; text-align: center;">green-lighter2</div>
						<div class="col s1 green-lighter1 " style="border: solid 1px white; text-align: center;">green-lighter1</div>
						<div class="col s1 green" style="border: solid 1px white; text-align: center;">green</div>
						<div class="col s1 green-darker1" style="border: solid 1px white; text-align: center;">green-darker1</div>
						<div class="col s1 green-darker2" style="border: solid 1px white; text-align: center;">green-darker2</div>
						<div class="col s1 green-darker3" style="border: solid 1px white; text-align: center;">green-darker3</div>
						<div class="col s1 green-darker4" style="border: solid 1px white; text-align: center;">green-darker4</div>
					</div>

					<div class="row">
						<div class="col s3 shift-s2">
							<h4>Colored text</h4>
						</div>
					</div>

					<div class="row">
						<div class="col l8 shift-s2">
							<p>If you're sharp enough, you might have noticed the color of the text change depending on the shade. By default, Habyl will automatically adjust the color of the text between white and black depending on the darkness of the shade. <br>
							However, if you wish to to manage your own color for the text, do as you did for the background and simply add "-text" to the color:</p>
						</div>
					</div>

					<div class="row">
						<div class="col l8 shift-s2 blue-grey-darker6" style="padding-left: 10px">

<pre>
<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"row"</span><span class="tag">></span>
	<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"col s1 red-text"</span><span class="tag">></span>red-text<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span>
	<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"col s1 pink-text"</span><span class="tag">></span>pink-text<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span>
	<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"col s1 purple-text"</span><span class="tag">></span>purple-text<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span>
	<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"col s1 green-text"</span><span class="tag">></span>green-text<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span>
	<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"col s1 lime-text"</span><span class="tag">></span>lime-text<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span>
	<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"col s1 teal-text"</span><span class="tag">></span>teal-text<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span>
	<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"col s1 yellow-text"</span><span class="tag">></span>yellow-text<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span>
	<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"col s1 orange-text"</span><span class="tag">></span>orange-text<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span>
	<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"col s1 deep-orange-text"</span><span class="tag">></span>deep-orange-text<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span>
	<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"col s1 brown-text"</span><span class="tag">></span>brown-text<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span>
<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span></pre>

						</div>
					</div>

					<div class="row">
						<div class="col s1 shift-s1 red-text" style="border: solid 1px white; text-align: center;">red-text</div>
						<div class="col s1 pink-text" style="border: solid 1px white; text-align: center;">pink-text</div>
						<div class="col s1 purple-text" style="border: solid 1px white; text-align: center;">purple-text</div>
						<div class="col s1 green-text" style="border: solid 1px white; text-align: center;">green-text</div>
						<div class="col s1 lime-text" style="border: solid 1px white; text-align: center;">lime-text</div>
						<div class="col s1 teal-text" style="border: solid 1px white; text-align: center;">teal-text</div>
						<div class="col s1 yellow-text" style="border: solid 1px white; text-align: center;">yellow-text</div>
						<div class="col s1 orange-text" style="border: solid 1px white; text-align: center;">orange-text</div>
						<div class="col s1 deep-orange-text" style="border: solid 1px white; text-align: center;">deep-orange-text</div>
						<div class="col s1 brown-text" style="border: solid 1px white; text-align: center;">brown-text</div>
					</div>

					<div class="row">
						<div class="col l8 shift-s2">
							<p>"Did you just use the palette of the first color tutorial?" <br>
							Yes, because it's that easy! <br>
							Now, with borders!</p>
						</div>
					</div>

					<div class="row">
						<div class="col l8 shift-s2 blue-grey-darker6" style="padding-left: 10px">

<pre>
<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"row"</span><span class="tag">></span>
	<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"col s1 red-border"</span> <span class="tag">style</span><span class="pun">=</span><span class="atv">"border: solid 1px; text-align: center;"</span><span class="tag">></span>red-border<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span>
	<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"col s1 pink-border"</span> <span class="tag">style</span><span class="pun">=</span><span class="atv">"border: solid 1px; text-align: center;"</span><span class="tag">></span>pink-border<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span>
	<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"col s1 purple-border"</span> <span class="tag">style</span><span class="pun">=</span><span class="atv">"border: solid 1px; text-align: center;"</span><span class="tag">></span>purple-border<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span>
	<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"col s1 green-border"</span> <span class="tag">style</span><span class="pun">=</span><span class="atv">"border: solid 1px; text-align: center;"</span><span class="tag">></span>green-border<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span>
	<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"col s1 lime-border"</span> <span class="tag">style</span><span class="pun">=</span><span class="atv">"border: solid 1px; text-align: center;"</span><span class="tag">></span>lime-border<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span>
	<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"col s1 teal-border"</span> <span class="tag">style</span><span class="pun">=</span><span class="atv">"border: solid 1px; text-align: center;"</span><span class="tag">></span>teal-border<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span>
	<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"col s1 yellow-border"</span> <span class="tag">style</span><span class="pun">=</span><span class="atv">"border: solid 1px; text-align: center;"</span><span class="tag">></span>yellow-border<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span>
	<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"col s1 orange-border"</span> <span class="tag">style</span><span class="pun">=</span><span class="atv">"border: solid 1px; text-align: center;"</span><span class="tag">></span>orange-border<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span>
	<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"col s1 deep-orange-border"</span> <span class="tag">style</span><span class="pun">=</span><span class="atv">"border: solid 1px; text-align: center;"</span><span class="tag">></span>deep-orange-border<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span>
	<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"col s1 brown-border"</span> <span class="tag">style</span><span class="pun">=</span><span class="atv">"border: solid 1px; text-align: center;"</span><span class="tag">></span>brown-border<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span>
<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span></pre>

						</div>
					</div>

					<div class="row">
						<div class="col s1 shift-s1 red-border" style="border: solid 1px; text-align: center;">red-border</div>
						<div class="col s1 pink-border" style="border: solid 1px; text-align: center;">pink-border</div>
						<div class="col s1 purple-border" style="border: solid 1px; text-align: center;">purple-border</div>
						<div class="col s1 green-border" style="border: solid 1px; text-align: center;">green-border</div>
						<div class="col s1 lime-border" style="border: solid 1px; text-align: center;">lime-border</div>
						<div class="col s1 teal-border" style="border: solid 1px; text-align: center;">teal-border</div>
						<div class="col s1 yellow-border" style="border: solid 1px; text-align: center;">yellow-border</div>
						<div class="col s1 orange-border" style="border: solid 1px; text-align: center;">orange-border</div>
						<div class="col s1 deep-orange-border" style="border: solid 1px; text-align: center;">deep-orange-border</div>
						<div class="col s1 brown-border" style="border: solid 1px; text-align: center;">brown-border</div>
					</div>

					<div class="row">
						<div class="col l8 shift-s2">
							<p style="font-style: italic; font-size: 13px;">However, don't forget to precise the size and property of the border, as it is not implemented for now.</p>
						</div>
					</div>

					<div class="row">
						<div class="col s3 shift-s2">
							<h3>Miscellaneous</h3>
						</div>
					</div>

					<div class="row">
						<div class="col s3 shift-s2">
							<h4>Buttons</h4>
						</div>
					</div>

					<div class="row">
						<div class="col l8 shift-s2">
							<p>Buttons are a part of this project. To create it quickly, add "button" to the class of the element.<br>
							Coming in 3 different sizes, to choose between them, simply add "small"or "large" to the button. If you want none of those two, leave "button" alone and it'll put a medium one.</p>
						</div>
					</div>

					<div class="row">
						<div class="col l8 shift-s2 blue-grey-darker6" style="padding-left: 10px">

<pre>
<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"row"</span><span class="tag">></span>
	<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"col l2 shift-s5"</span><span class="tag">></span>
		<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"button small deep-purple-lighter3 white-text"</span><span class="tag">></span>Small button<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span>
		<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"button deep-purple-lighter3 white-text"</span><span class="tag">></span>Button<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span>
		<span class="tag"><</span><span class="tag">div</span> <span class="atn">class</span><span class="pun">=</span><span class="atv">"button large deep-purple-lighter3 white-text"</span><span class="tag">></span>Large button<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span>
	<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span>
<span class="tag"><</span><span class="tag">/</span><span class="tag">div</span><span class="tag">></span></pre>

						</div>
					</div>

					<div class="row">
						<div class="col l2 shift-s5">	
							<div class="button small deep-purple-lighter3 white-text">Small button</div>

							<div class="button deep-purple-lighter3 white-text">Button</div>

							<div class="button large deep-purple-lighter3 white-text">Large button</div>
						</div>
					</div>

					<div class="row">
						<div class="col l8 shift-s2">
							<p style="font-style: italic; font-size: 13px;">Don't forget to put them inside a div with a col class, else the button will look quite different from the one we're showing you.</p>
						</div>
					</div>

					<div class="row">
						<div class="col s3 shift-s2">
							<h4>Tables</h4>
						</div>
					</div>

					<div class="row">
						<div class="col l8 shift-s2">
							<p>To quickly prepare the design of your table, add "table" and "presentation" to the class of your table. <br>
							Here is an example of table:</p>
						</div>
					</div>

					<div class="row">
						<div class="col s2 shift-l5">
							<table class="tab presentation">
								<tr class="blue-lighter1">
    								<th class="">Firstname</th>
    								<th class="">Lastname</th>
    								<th class="">Points</th>
								</tr>
								<tr class="blue-lighter2">
									<td class="">Jill</td>
									<td class="">Smith</td>
									<td class=" ">50</td>
								</tr>
								<tr class="blue-lighter3">
									<td class="">Eve</td>
									<td class="">Jackson</td>
									<td class="">94</td>
								</tr>
								<tr class="blue-lighter2">
									<td class=" ">Jill</td>
									<td class="">Smith</td>
									<td class=" ">50</td>
								</tr>
								<tr class="blue-lighter3">
									<td class="">Eve</td>
									<td class="">Jackson</td>
									<td class="">94</td>
								</tr>
								<tr class="blue-lighter2">
									<td class="">Jill</td>
									<td class="">Smith</td>
									<td class="">50</td>
								</tr>
								<tr class="blue-lighter3">
									<td class="">Eve</td>
									<td class="">Jackson</td>
									<td class="">94</td>
								</tr>
							</table>
						</div>
					</div>

					<div class="row">
						<div class="col l8 shift-s2">
							<p style="font-style: italic; font-size: 13px;">Tables may have bugs remaining. It may also be subject to change.</p>
						</div>
					</div>

					

					<div class="row">
						<div class="col s12 habyl footer purple-lighter5 white-text">
							<div class="col s12">
								<p>Ludwig Simon, Alexandre Petit-Pas, Baptiste Rayer & Bastian Szczygielski.<br>
								Habyl is a school project from the Institute University of Technology of Fontainebleau, France.<br>
								Special thanks to our tutor Denis Monnerat.</p>
							</div>
						</div>
					</div>

				</div>
					
			<div class="site-cache" id="site-cache"></div>
		</div>
	</div>
</body>

<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js?lang=css&amp;skin=doxy"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.4/hammer.js"></script>
<script src="<?php echo asset('js/habyl.js')?>" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo asset('js/Slideshow.js')?>" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo asset('js/Dropdown.js')?>" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo asset('js/Button.js')?>" type="text/javascript" charset="utf-8"></script>


</html>