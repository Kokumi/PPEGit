<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
	<title>page d'upload de compte-rendus</title>
	<link rel="stylesheet" href="PPEGit.css">
</head>

<body>
	<img src="gsb.png" class="img">
	<h1 class="titre">Ici vous pouvez d&eacute;poser vos comptes-rendus</h1>
	<p class="warning">Seul les fichier en .pdf sont admis</p>
        <form action='uploadPage.php' method='post' enctype='multipart/form-data'>
	 <input type='file' name='fichier'>
	 <input type='submit' value='Envoyer'>
	</form>
        <a href="index.html" class="retour">retour vers l'accueil</a>
	<?php
	 
        if(isset($_FILES['fichier']))
        {
        
            $type=$_FILES['fichier']['name'];
            $nomComplet=$_FILES['fichier']['tmp_name'];
            $chemin=pathinfo($type);
            $ext=$chemin['extension'];
            $extAutorise=array('pdf');
            if(in_array($ext, $extAutorise))
            {
		print('<br> le fichier final sera'.$type);
		if(move_uploaded_file($nomComplet, destination)) //à completer
		{
			print("<p class=\"reussi\"<br>c'est envoyer!");
		}
		else
		{
			print("<p class=\"warning\"><br>Impossible d'envoyer</p>");
		}
            }
            else
            {
		echo"<p class=\"warning\"><br>le fichier n'est pas en pdf</p>";
            }
        }
        else
        {
            print('pas de fichier s&eacute;l&eacute;ctionn&eacute;');
        }
	?>
</body>