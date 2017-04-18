<html>
<head>
	<title>About</title>
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
<div align=Center>
<h2>About STBI ( SISTEM INFORMASI TEMU BALIK )</h2>
<br>
<body>
<div align =left class=body >
        <pre>
        - Ambil Berita
        - Lakukan Tokenisasi per Kata
        - Lakukan Penghilangan Stopword
	- Lakukan Hitung Bobot
	- Lakukan Hitung Vektor
	- Menampilkan Cache
        - Lakukan Pengambilan Keyword (berdasarkan persentase hasil tokenisasi)
        - Lakukan Stemming pada Keyword (menggunakan algoritma Nazief - Adriani)
          1. Cari kata yang akan distem dalam kamus. Jika ditemukan maka diasumsikan bahwa kata tesebut adalah root word. 
		  Maka algoritma berhenti.
          2. Inflection Suffixes ("-lah", "-kah", "-ku", "-mu", atau "-nya") dibuang. Jika berupa particles ("-lah", 
		  "-kah", "-tah" atau "-pun") maka langkah ini diulangi lagi untuk menghapus Possesive Pronouns ("-ku", "-mu", 
		  atau "-nya"), jika ada.
          3. Hapus Derivation Suffixes ("-i", "-an" atau "-kan"). Jika kata ditemukan di kamus, maka algoritma berhenti.
		  Jika tidak maka ke langkah 3a
             a. Jika "-an" telah dihapus dan huruf terakhir dari kata tersebut adalah "-k", maka "-k" juga ikut dihapus. 
		  Jika kata tersebut ditemukan dalam kamus maka algoritma berhenti. Jika tidak ditemukan maka lakukan 
		  langkah 3b.
             b. Akhiran yang dihapus ("-i", "-an" atau "-kan") dikembalikan, lanjut ke langkah 4.
          4. Hapus Derivation Prefix. Jika pada langkah 3 ada sufiks yang dihapus maka pergi ke langkah 4a, jika tidak 
		  pergi ke langkah 4b.
             a. Periksa tabel kombinasi awalan-akhiran yang tidak diijinkan. Jika ditemukan maka algoritma berhenti, 
		  jika tidak pergi ke langkah 4b.
             b. For i = 1 to 3, tentukan tipe awalan kemudian hapus awalan. Jika root word belum juga ditemukan lakukan 
		  langkah 5, jika sudah maka algoritma berhenti. Catatan: jika awalan kedua sama dengan awalan pertama 
		  algoritma berhenti.
          5. Melakukan Recoding.
          6. Jika semua langkah telah selesai tetapi tidak juga berhasil maka kata awal diasumsikan sebagai root word. 
		  Proses selesai.
        - Lakukan Pencarian berdasarkan Keyword. (query diambil dari tabel keyword)
	- Download File upload
          </pre>
		  </div>
</body>
</html>