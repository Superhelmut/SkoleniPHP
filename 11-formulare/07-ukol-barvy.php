<?php

	$vypis = $_GET["barva"];
?>
<!DOCTYPE html>
<html lang="cs">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>



<form>
	<input type="hidden" name="barva" value="green">
	<input type="hidden" name="barva" value="red">
	<input type="hidden" name="barva" value="blue">
</form>

	<a href="?barva=green" >Zelená</a>
	<a href="?barva=red">Červená</a>
	<a href="?barva=blue">Modrá</a> 

	<div class="barva"></div>
</body>

<style>
	.barva{
		height: 200px;
		background-color: <?php echo $vypis;?>;
	}
</style>
</html>