<?php
include "templates/header.php";
?>
<div class="center">      
    <h1>Formulaire d'inscription</h1>
</div>
<div class="center">
    <p>Inscrivez à la Newsletter mensuel de notre selection des meilleurs livres classée par vos thèmes favoris</p>
<br>
</div>
<div class="center"> 
    <form action ="login.php"method="POST">
        <table>
            <tr>
            <th>
                <label for="name">Nom</label>
            </th>
            <th>
                <label for="firstName">Prénom</label>
            </th>
            <th>
                <label for="password">Mot de passe </label>
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
                <input type="text" name="login" placeholder="Votre nom"required>
            </td>
            <td>
                <input type="text" placeholder="Votre Prénom"required>
            </td>
            <td>
                <input type="password" name="pwd" placeholder="Votre Mot de passe"required>
            </td>
            <td>
                <input type="radio" name="gender" value="male"> Homme<br>
                <input type="radio" name="gender" value="female"> Femme<br>
            </td>
            <td>
                <input type="email" placeholder="Votre adresse mail"required>
            </td>
            <td>
                <input type="checkbox" name="theme1" value="SF">Sciences Fictions<br>
                <input type="checkbox" name="theme2" value="Fantasy "> Fantastique<br>
                <input type="checkbox" name="theme3" value="Mangas" >Manga<br>
                <input type="checkbox" name="theme4" value="Comics"> Comics<br>
                <input type="checkbox" name="theme5" value="BD"> Bande Dessinée<br>
                <input type="checkbox" name="theme6" value="Policier"> Policier<br>

            </td>
            </tr>
        </table>
        <div class="center">
            <input type="submit"value="Valider">
        </div>
        
    </form>
</div>
<div class="center">
    <h2>Nous contacter</h2>
</div>
<div class="center">
    <p>Vous pouvez nous envoyer vos suggestion de livres pour la prochaine Newsletter.</p>
</div>
<div class="center">
    <p>Si nous retenons votre sugestion, souhaitez vous recevoir un mail.Pouvons nous utliser votre prénom lors de la publication?</p>
</div>

<div class="center">
<form action= "contact.php" method= "POST">
    <label for="name" >Nom</label>
    <input type="text" placeholder="Votre nom"required>
 <br><br>
    <label for="firstName">Prénom</label>
    <input type="text" placeholder="Votre Prenom"required>
    <br><br>
    <label for="mail">Email</label>
    <input type="email"placeholder="Votre adresse mail"required>
    <br><br>
    <label for="authorName">Auteur</label>
    <input type="text" placeholder="Nom de l'auteur"required>
    <br><br>
    <label for="bookTitle">Titre du livre</label>
    <input type="text"placeholder="Titre du livre"required>
    <br><br>
    <label for="bookTitle">Nombre de Pages</label>
    <input type="text"placeholder="Nombre de Pages"required>
    <br><br>
    <label for="bookTitle">Genre</label>
    <input type="text"placeholder="Titre du livre"required>
    <br><br>
    <div class="center">
        <input type="submit"value="Valider">
    </div>
    
</form>
<br><br><br>
</div>                                                                   




<?php
include "templates/footer.php";
?>
