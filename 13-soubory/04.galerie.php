<!DOCTYPE html>
<html lang="cs">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		$galerie = scandir("galerie");
		var_dump($galerie);

		$priponyObrazku = ["jpg", "png", "gif", "JPG"];


		foreach($galerie as $obrazky)
		{
			if (is_file("galerie/$obrazky"))
			{
				$info = pathinfo("galerie/$obrazky");
				$pripona = $info["extension"];
				if (in_array($pripona, $priponyObrazku))
				{
					echo "<a href='galerie/$obrazky'>$<img src='galerie/$obrazky' width=300</a>";
				}
	
	
			}
		}
	?>
</body>

</html>