<?php
session_start();
if(isset($_POST['submit']))
{
    $email=$_POST['EMAIL'];
    $pass=$_POST['PASSWORD'];
    $db=new PDO('mysql:host=localhost;dbname=ADMIN','root','');
    $sql="SELECT * FROM ADMINN where email='$email'";
    $result=$db->prepare($sql);
    $result->execute();
    if($result->rowCount() >0){
      
        $data=$result->fetchAll();
        $pass=hash('ripemd160',$pass);

        if($pass == $data[0]["PASSWORD"]){
            echo"connexion effectuee";
            $_SESSION["email"]=$email;
            header('Location: http://localhost/projet_web/section.php');
        }

    }
    else{
        echo"mot de passe ou email incorrect";
       // $pass=hash('ripemd160',$pass);
        //$sql="INSERT INTO adminn (EMAIL,PASSWORD) VALUES ('$email','$pass')";
        //$req=$db->prepare($sql);
        //$req->execute();
        //echo"enregistrement effectuee";
        
     }


}



?>
