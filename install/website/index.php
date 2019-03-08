<html>
	<head>
		<title>Meubel Stock</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body style="background-color: #6600ff; color: #f6f6f6; text-align: center">
		<h1>Deze Meubelen zijn nog in stock:</h1>
		<ul style="list-style-type:none;">
			<?php 
				$json = file_get_contents('http://meubel-service');
				$obj = json_decode($json);

				$meubels = $obj->meubels;
				foreach ($meubels as $meubel){
					echo '<li style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); transition: 0.3s; width: 200px; heigth: 200px; background-color: #330080; float: left; margin: 25px; display: inline-block; padding: 50px;">'.$meubel.'</li>';
				}
			?>
		</ul>
	</body>
</html>
