<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>belajar</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
		background-color: white;

	}
    label{
    	width:100px;
  float: left;
  padding: 6px;

	}
	</style>
</head>
<body>

<div id="container">
	<center><h1>BLOG</h1></center>

	<div id="body">
	<marquee>TEST BLOG</marquee>
		<?php 
			foreach ($query->result() as $row) {
		?>
	<pre>

	<form action="<?php echo base_url() ?>index.php/blog/update" method="post">
	<label>NAMA</label><input type="text" placeholder="Nama" name="nama" value="<?php echo $row->nama ?>"/><input type="text" placeholder="Nama" name="idh" value="<?php echo $row->id ?>"/>
	(Gunakan tombol Enter untuk pindah baris)
	<label>KOMENTAR</label><textarea name="artikel" placeholder=" Isikan komentar Anda" cols="70" rows="10"><?php echo $row->artikel ?></textarea>	
	<label></label><input 	type="submit">
	</form>
	<?php 
			}
		?>
	
</body>
</html>