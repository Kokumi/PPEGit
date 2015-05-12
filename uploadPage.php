<!DOCTYPE html>
<head>
	<title>page d'upload de compte-rendus</title>
	<link rel="stylesheet" href="PPEGit.css">
</head>

<body>
	<img src="gsb.png" class="img">
	<h1 class="titre">Ici vous pouvez d&eacute;poser vos comptes-rendus</h1>
	<?php
	echo "<form action='traitement.php' method='post' enctype='multipart/form-data'>";
	echo "<input type='file' name='nom_fichier'>";
	echo "<input type='submit' value='Envoyer'>";
	echo "</form>";
	?>
</body>