
<?php
/**
 * Documentation sur cet exercisse = http://www.lephpfacile.com/cours/18-les-sessions
 */


$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'reunion_island';

$conn = new mysqli($servername, $username, $password);


if ($conn->error){
    echo 'Echec lors de la connexion à MySQL'.$conn->connect_error;
}else{
    $conn->select_db($dbname);
    echo "<p style='color: white'>Connection OK &#9829</p>";
}
echo $conn->error;

//===================================================//
?>



<!DOCTYPE html>
<html>
  <head>

      <meta http-equiv="" content="0" URL=index.html" charset="utf-8">
    <title>Login</title>
      <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" >

  </head>
  <body>


  <fieldset>
      <label for="form">Enregistrez-vous</label>
  <form name="form-" action="" method="post">
      <div>
        <label for="username">Identifiant</label>
        <input id="form-content" type="text" name="username" placeholder="username" required>
      </div>
      <div>
        <label for="password">Mot de passe </label>
        <input type="password" name="password" placeholder="password" required>
      </div>
      <div>
          <div id="header_member">
              <a href="logout.php"><button type="submit" name="button">Se connecter</button></a>
          </div>
      </div>
    </form>
  </fieldset>


  </body>
</html>



<?php
//===================================================//


$username_valide = $_POST["username"];
$password_valide = $_POST["password"];

//$username_valide = "moi";
//$password_valide = "pass";

function recupere_id_client($username, $password){
    $username_valide = $_POST['username'];
    $password_valide = $_POST['password'];
    $recup = "SELECT username, password FROM user WHERE username = $username_valide AND password = $password_valide";
}
recupere_id_client($username_valide,$password_valide);



if (isset($_POST['username']) && isset($_POST['password'])){

    if ($username_valide === $_POST['username'] && $password_valide === $_POST['password']){
        session_start();

        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];
        header('location: check_login.php');

    }
    else {
        echo '<body onLoad = "alert(\'Membre non reconnu...\')">';
        echo '<meta http-equiv="refresh" content="0";URL=index.html">';
    }
}
else{
    //echo 'Les variables du formulaire ne sont pas déclarées';
}


?>