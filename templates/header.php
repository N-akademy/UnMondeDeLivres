<?php 
 session_start();
 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Un Monde de Livre</title>
    <link rel="stylesheet" href="css/style.css">
    
    
    
</head>
<body>
    <header>
        <div>
            <ul class="topnav" >
                
<?php
            if(isset($_SESSION) && !empty($_SESSION)){
?>
                <li><a class="active" href="index.php">Accueil</a></li>
                <li><a href="decouverte.php">Présentation</a></li>
                <li><a href="api.php">Questionnaire</a></li>
                <li><a href="form.php">Formulaire</a></li>
                <li><a href="game.php">Jeu</a></li>   
<?php 
               }else{
?>
            <li><a class="active" href="index.php">Accueil</a></li>
            <li><a href="decouverte.php">Présentation</a></li>
            <li><a href="api.php">Questionnaire</a></li>
            <li><a href="form.php">Formulaire</a></li>
<?php
              }
?>
            </ul>
        </div>    
    </header>
