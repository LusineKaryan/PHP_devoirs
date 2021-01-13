<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Titre de ma page</title>
    </head>
    <body>
        <?php
        if(!isset($_POST['nom'])){
        ?> 
        <form action="send.php" method="post">
            <p>
            <label for="nom">Nom : </label><input type="text" name="nom" />
            </p>
            <input type="submit" value="Envoyer">
        </form> 
        <?php
        } else {
        $nom = $_POST['nom'];
        echo  "Merci d'avoir saisi correctement votre nom,\n" . $_POST['nom'];
        } 
        ?>
    </body>
</html>