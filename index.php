<!DOCTYPE>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>
		<?php echo "Hola mundo"; ?>
	</h1>
	<h1>
		<?php
			for($i=2; $i<6; $i++){
				echo "<h$i>¿Cómo estás?</h$i>";
			} 
		?>
	</h1>
</body>
</html>
