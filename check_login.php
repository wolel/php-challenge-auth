<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/basics_check_login.css" media="screen" title="no title" charset="utf-8">

</head>
<body>

<div class="image">
    <h1>Decouvrir le métier de photographe</h1>
    <img src="image/img_2.jpg" alt="imgagePhoto_1">
    <p><strong>Le métier de photographe</strong> est une profession d'art et de technique.
        Il existe plusieurs types de photographes, en studio ou en extérieur :
        photographe de presse, photographe d'art, professionnel spécialisé dans
        la photo de paysages, de personnes, d'objets ou de mariage, photographe de mode,
        photographe animalier</p>
</div>

<div id="header_member">
<a href="logout.php"><button id="btn" type="submit" name="button">Se déconnecter</button></a>
</div>

<?php
//Check if credentials are valid
session_start();

echo "<p style='color: white; margin-left: 20px'>Vous êtes connecté &#9829 !</p>";


function check(){

if (isset($_SESSION['username']) && isset($_SESSION['password'])){
    echo '<html>';
    echo '<head>';
    echo "<title>Page de notre selection membre";
    echo '</head>';
    echo '<body>';
    echo '<p>Votre login est : '.$_SESSION['username'].' '.'Votre mot de pass est : '.$_SESSION['password'].'</p>';
echo'<br><br>';

    echo '<a href= ".\logout.php">Déconnection</a>';
}
else{
    //echo 'Les variables ne sont pas déclarées';
}
}

check();


