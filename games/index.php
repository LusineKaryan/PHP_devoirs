<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    try
    {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $db = new PDO('mysql:host=localhost;dbname=games;charset=utf8', 'root', '',$pdo_options);
    $requete = $db->query('SELECT UPPER(nom) AS nom_maj FROM jeux_vidéo');
    while ($new = $requete->fetch())
    {
    echo $new['nom_maj'] . '<br />';
    }
    $requete->closeCursor(); 
    }
    catch(Exception $e)
    {
    die('Erreur : '.$e->getMessage());
    }
?>
 
</body>
</html>
