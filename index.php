<?php

  // Initialiser la session
  session_start();
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit();
  }
  require('config.php');
  $username = $_SESSION["username"];
?>
<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="top">
        <div class="info">
            <p><?php echo $_SESSION['username']; ?></p>
        </div>
    </div>
    <div class="left">
      <div class="message"><p>djeijdie</p></div>
    </div>
    <div class="center">
      <div class="message">
        <p>fefefef</p>
      </div>
    </div>
    <div class="right">
      <div class="message">
        <p>dedede</p>
      </div>
    </div>  
  </body>
</html>