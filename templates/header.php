<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
    <li><a href="presentation.php">Suggestions</a></li>
    <li><a href="biblio.php">Bibliothèque</a></li>
    <li><a href="form.php">Formulaire</a></li>
    <li><a href="game.php">Jeu</a></li> 
        
<?php 
    }else{
?>
    <li><a class="active" href="index.php">Accueil</a></li>
    <li><a href="presentation.php">Suggestions</a></li>
    <li><a href="biblio.php">Bibliothèque</a></li>
    <li><a href="form.php">Formulaire</a></li>
                
            
<?php
    }
?>
            </ul>
        </div>    

    </header>