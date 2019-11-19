<?php
include "templates/header.php";
?>
<h1>Formulaire d'inscription</h1>
<br>
<p>Inscrivez à la Newsletter mensuel de notre selection des meilleurs livres classée par vos thèmes favoris</p>
<br>
<form acttion ="data.php"method="POST">
    <table class= "center">
        <tr>
        <th>
            <label for="name">Nom</label>
        </th>
        <th>
            <label for="firstName">Prénom</label>
        </th>   
        <th>
            <label for= "gender">Genre</label>
        </th>
        <th>
            <label for="mail">Email</label>
        </th>
        <th>
            <label for="themes">Thèmes</label>
        </th>
        </tr>
        <tr>
        <td>
            <input type="text" placeholder="Votre nom">
        </td>
        <td>
            <input type="text" placeholder="Votre Prénom">
        </td>
        <td>
            <input type="radio" name="gender" value="male"> Homme<br>
            <input type="radio" name="gender" value="female"> Femme<br>
        </td>
        <td>
            <input type="email" name="Votre adresse mail">
        </td>
        <td>
            <input type="checkbox" name="theme1" value="SF">Sciences Fictions<br>
            <input type="checkbox" name="theme2" value="Fantasy "> Fantastique<br>
            <input type="checkbox" name="theme3" value="Mangas" checked>Manga<br>
            <input type="checkbox" name="theme4" value="Comics"> Comics<br>
            <input type="checkbox" name="theme5" value="BD"> Bande Dessinée<br>
            <input type="checkbox" name="theme6" value="Policier" checked> Policier<br>
        </td>
        </tr>
    </table>
    <input class="submit"type="submit">
</form>
<br><br>
<h2>Nous contacter</h2>
<br>
<p>Vous pouvez nous envoyer vos suggestion de livres pour la prochaine Newsletter.</p>
<p>Si nous retenons votre sugestion, souhaitez vous recevoir un mail.Pouvons nous utliser votre prénom lors de la publication?</p>
<br>
<form class="center" action= "contact.php" method= "POST">
    <label for="name">Nom</label>
    <input type="text" placeholder="Votre nom">
    <br><br>
    <label for="firstName">Prénom</label>
    <input type="text" placeholder="Votre Prenom">
    <br><br>
    <label for="mail">Email</label>
    <input type="email" placeholder="Votre adresse mail">
    <br><br>
    <label for="authorName">Auteur</label>
    <input type="text" placeholder="Nom de l'auteur">
    <br><br>
    <label for="bookTitle">Titre du livre</label>
    <input type="text"placeholder="Titre du livre">
    <br><br>
    <label for="bookTitle">Nombre de Pages</label>
    <input type="text"placeholder="Nombre de Pages">
    <br><br>
    <label for="bookTitle">Genre</label>
    <input type="text"placeholder="Titre du livre">
    <br><br>
    <input type="image" src="img/livre.webp" alt="Submit">

</form>
<?php
include "templates/header.php";
?>
