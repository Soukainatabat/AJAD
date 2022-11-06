
<?php
 include"cnx.php";

  if(isset($_GET["PRENOM"]) && isset($_GET["NOM"]) && isset($_GET["PAYS"])&& isset($_GET["VILLE"]) && isset($_GET["DON"]) && isset($_GET["NUM_TELEPHONE"]) )
  {
	 
	  $prenom=$_GET["PRENOM"];
	  $nom=$_GET["NOM"];
	  $pays=$_GET["PAYS"];
	  $ville=$_GET["VILLE"];
	  $don=$_GET["DON"];
	  $telephone=$_GET["NUM_TELEPHONE"];
	  $req=mysqli_query($link,"insert into PARTENAIRE (PRENOM,NOM,PAYS,VILLE,DON,NUM_TELEPHONE) values ('$prenom','$nom','$pays','$ville','$don','$telephone')");
	  if($req)
	  {
		  echo" insertion effectuee";
	  }
	  else{
		  echo"erreur d'insertion";
	  }
	  
	  
  }
?>