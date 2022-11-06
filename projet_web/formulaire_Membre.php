<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link  rel="stylesheet" href="assert/css/style_css.css"/>
    <title>AJAD</title>
	 
	
	
</head>
<body>
<form  action="connexion_membre.php" method="post">
<fieldset>
<legend>  INSCRIPTION</legend>

<label>PRENOM</label><input type="text" name="PRENOM" placeholder="entrer votre prenom"/><br>
<label>NOM</label><input type="text" name="NOM" placeholder="entrer votre nom"/><br>
<label>EMAIL</label><input type="email" name="EMAIL" placeholder="entrer votre email"/><br>
<label>TEL</label><input type="tel" name="TEL" placeholder="entrer votre tel"/><br>
<label>PAYS</label><input type="text" name="PAYS" placeholder="entrer votre pays"/><br>
<label>VILLE</label><input type="text" name="VILLE" placeholder="entrer votre ville"/><br>
<label>AGE</label><input type="int" name="AGE" placeholder="entrer votre age"/><br>
<label>  PASSWORD</label><input type="password" name="PASSWORD" placeholder="entrer votre password"/><br>
<label>SEXE</label><input type="radio" name="AGE" value="HOMME"/>HOMMME<input type="radio" name="SEXE" value="FEMME"/>FEMME <br>
<input type="submit" value="valider" name=" submit" />

</fieldset>


</form>




</body>