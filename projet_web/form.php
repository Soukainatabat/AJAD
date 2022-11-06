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
    <title>Admin</title>
</head>
<body>      
    <form action="connexion.php" method="post">
      <label>EMAIL</label><input type="email" name="EMAIL" placeholder="entrer votre email"/><br>
      <label>PASSWORD</label><input type="password" name="PASSWORD" placeholder="entrer votre password"/><br>
      <input type="submit" value="valider" name="submit"/>
    </form>
     
</body>
</html>