<html>
<head>
	<title>Hasil Pencarian</title>
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
<br>
<br>
<br>

</head>
<body>
<div align=Center>
<body> 

<?php
 //https://dev.mysql.com/doc/refman/5.5/en/fulltext-boolean.html
 //ALTER TABLE dokumen
//ADD FULLTEXT INDEX `FullText` 
//(`token` ASC, 
 //`tokenstem` ASC);
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbstbi";
$katakunci="";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
	{
		die("Connection failed: " . $conn->connect_error);
	} 
	$hasil=$_POST['katakunci'];
	$results=$conn->query("SELECT distinct nama_file,token,tokenstem FROM `dokumen` where token like '%$hasil%'");
	//$sql = "SELECT distinct nama_file,token,tokenstem FROM `dokumen` WHERE MATCH (token,tokenstem) AGAINST ('$hasil' IN BOOLEAN MODE)";
	$num = $results->num_rows;
	//echo $sql;;

if ($num== 0) 
	{
		//pesan jika tidak ada hasil
		echo '<p>Pencarian dengan kata kunci <b>'.$hasil.'</b> tidak ada hasil.</p>';
	}
	else
	{
		//pesan jika ada hasil pencarian
		echo '<p>Pencarian dari kata kunci <b>'.$hasil.'</b> mendapatkan '.$num.' hasil:</p>';
		//perulangan untuk menampilkan data
		while($row = $results->fetch_assoc())
			{
				//menampilkan data
				echo '
				<p>
					<b>Nama file:'.$row['nama_file'].'</b><br>
					Token : '.$row['token'].'<br>
					'.$row['tokenstem'].'<br>
					</p>
					';
			}
	}
$conn->close();

?>

<form action="query.php" method="get">
<input class="btnForm" type="submit" name="submit" value="Cari Lagi"/>
<form action="index.php" method="get">
<input class="btnForm" type="submit" name="submit" value="Kembali"/>
</form>
</body>
</html>
