<html>
	<head>
		<title>URL - Enconder</title>
	 	<link rel="stylesheet" type="text/css" href="style.css" placeholder="Url">
	</head>
	<body>
		<center>
		<h1> URL - Enconder</h1><br>
		<div class="quadrado">
			<form method="POST">
				<p>URL a ser encodada:</p>
				<input type="text" name="urln" class="urln" placeholder="https://example.com"><br><br>
				<button type="submit">Encode!</button>
			</form>
			<br><p>Resposta:</p><br>
		</div>
		<div class="resp">
			<?php 
				$url = $_POST['urln'];
				echo rawurlencode($url);
			?>
		</div>
		<div class="links">
			<a href="explained.php">Explicação | </a>
			<a href="https://github.com/vida00">GitHub</a>
		</div>
	</center>
	</body>
</html>
