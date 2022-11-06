<?php
session_start();

if(isset($_POST['submit'])&& isset($_POST['PRENOM']) && isset($_POST['NOM'])&& isset($_POST['EMAIL']) && isset($_POST['TEL']) && isset($_POST['PAYS']) && isset($_POST['VILLE']) && isset($_POST['AGE'])&& isset($_POST['SEXE'])&& isset($_POST['PASSWORD']))
{
    $prenom=$_POST['PRENOM'];
    $nom=$_POST['NOM'];
    $email=$_POST['EMAIL'];
    $tel=$_POST['TEL'];
    $pays=$_POST['PAYS'];
    $ville=$_POST['VILLE'];
    $age=$_POST['AGE'];
    $sexe=$_POST['SEXE'];
    $password=$_POST['PASSWORD'];
   // $cin=hash('ripemd160',$cin);
    $db=new PDO('mysql:host=localhost;dbname=AJAD_ASSOCIATION','root','');
   
    $sql="SELECT * FROM MEMBRE where email='$email'";
    $result=$db->prepare($sql);
    $result->execute();
    
    if($result->rowCount() >0){
       
        /* $data=$result->fetchAll();
        $cin=hash('ripemd160',$cin);
        echo"impossible";
        if($cin != $data[0]["CIN"]){
            echo"connexion effectuee";
            $_SESSION["email"]=$email;*/
           // header('Location: http://localhost/projet_web/section2.php');
           echo"Vous êtes déjà membre de l’association AJAD.";
        }

  
    else{
        $password=hash('ripemd160',$password);
        $sql="INSERT INTO MEMBRE (PRENOM,NOM,EMAIL,TEL,PAYS,VILLE,AGE,SEXE,CIN) VALUES ('$prenom','$nom','$email','$tel','$pays','$ville','$age','$sexe','$password')";
        $req=$db->prepare($sql);
        $req->execute();
        echo"Félicitations, vous êtes maintenant membre de notre association AJAD.";
        
     }


}



?>
