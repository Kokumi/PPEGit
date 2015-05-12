<!DOCTYPE html>
<head>
	<title>Page de recheche de compte rendus</title>
	<link rel="stylesheet" href="PPEGit.css">
</head>
<body>
	<img src="gsb.png" class="img">
	<h1 class="titre">Ici vous pouvez rechercher des comptes rendus</h1>
        <form action='recherchePage.php' method='post' enctype='multipart/form-data' class="barreRecherche">
            <input type="text" name="textRecherche">
            <input type="submit" value="Rechercher">
        </form>
	<?php
            //$recherche=;
            print $recherche;
	?>

</body>