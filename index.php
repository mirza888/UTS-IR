<? include 'connect.php'; ?>
<html>
    <head>
        <title>UNISBANK</title>
		<link href='images/icon.png' rel='shortcut icon'>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<style type="text/css">
			header, section, footer, aside, nav, article, figure, figcaption {
				display: block;}
			body {
				color: #666666;
				background-color: #f9f8f6;
				background-image: url("images/dota-2-symbol-free-hd-wallpapers.jpg");
				background-position: center;
				font-family: Georgia, Times, serif;
				line-height: 1.4em;
				margin-left: 10%; margin-right: 10%;}
			.wrapper {
				width: 220px;
				margin: 20px auto 20px auto;
				border: 2px solid #000000;
				background-color: #ffffff;}
			header {
				height: 160px;
				background-image: url(images/U.png);}
			h1 {
				text-indent: -9999px;
				width: 940px;
				height: 130px;
				margin: 0px;}
			nav, footer {
				clear: both;
				color: #ffffff;
				background-color: #DC143C;
				height: 30px;}
			nav ul {
				margin: 0px;
				padding: 5px 0px 5px 30px;}
			nav li {
				display: inline;
				margin-right: 40px;}
			nav li a {
				color: #ffffff;}
			nav li a:hover, nav li a.current {
				color: #000000;}
			section.courses {
				float: left;
				width: 659px;
				border-right: 1px solid #eeeeee;}
			article {
				clear: both;
				overflow: auto;
				width: 100%;}
			hgroup {
				margin-top: 40px;}
			figure {
				float: left;
				width: 290px;
				height: 220px;
				padding: 5px;
				margin: 20px;
				border: 1px solid #eeeeee;}
			figcaption {
				font-size: 90%;
				text-align: left;}
			aside {
				width: 230px;
				float: left;
				padding: 0px 0px 0px 20px;}
			aside section a {
				display: block;
				padding: 10px;
				border-bottom: 1px solid #eeeeee;}
			aside section a:hover {
				color: #985d6a;
				background-color: #efefef;}
			a {
				color: #de6581;
				text-decoration: none;}
			h1, h2, h3 {
				font-weight: normal;}
			h2 {
				margin: 10px 0px 5px 0px;
				padding: 0px;}
			h3 {
				margin: 0px 0px 10px 0px;
				color: #de6581;}
			aside h2 {
				padding: 30px 0px 10px 0px;
				color: #de6581;}
			footer {
				font-size: 80%;
				padding: 7px 0px 0px 20px;}
			.banner{width:940px; height:540px; margin-left:0px; margin:0 auto; margin-bottom:0px; background:url(images/Banner.jpg) no-repeat; position:relative;}
			.banner h1{ padding:10px; float:right; background:#C11B17; text-transform:uppercase; color:#ffffff;  font-size:30px; font-weight:normal; font-family: 'Blade Runner Movie Font'; position:absolute; top:130px; right:0;}
			.banner h2{ padding:10px; float:right; background:#ffffff; text-transform:uppercase; color:#1a202c;  font-size:22px; font-weight:normal; font-family: 'Baccarat'; position:absolute; top:195px; right:0;}
					
		</style>
		
    </head>
	<br>
	<br>
    
    <body>
        <h2 align=center>STBI - UNISBANK SEMARANG</h2>
		<br>
		<div align=center class="wrapper">
				<nav>
					<ul>
						<li><a href="?menu=about">About</a></li>
						<li><a href="?menu=profile">Profile</a></li>
						
						
					</ul>
				</nav>
			</div>
		
		<br>
        <hr>
		<h4>
        <div align=center>
        | <a href="upload.php">Upload File PDF</a> |
		<a href="hitungbobot.php">Hitung Bobot </a> |
		<a href="hitungvektor.php">Hitung Vektor </a> |
		<a href="awalquery.php">Tampilkan Cache</a> |
        <a href="Stemming.php">Pencarian Kata Dasar</a> |
        <a href="query.php">Pencarian Query</a> |
		<a href="download.php">Download </a> |
        </div>
		<h4>
        <hr/>
<p>
<?php
	error_reporting(0);
	if($_GET[menu]=='')
	{
		include('#');
	}
	else
	{
		include($_GET[menu].'.php');
	}
?>
</p>
		<br>
		<footer>
				<MARQUEE align="center" direction="left" height="200" scrollamount="4" width="98%">&copy; 2017 Tugas Mata Kuliah Informasi Retrieval STBI ( SISTEM INFORMASI TEMU BALIK )</MARQUEE>
		</footer>
    </body>
</html>
