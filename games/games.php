<?php
$db = new PDO('mysql:host=localhost;dbname=games', 'root', '');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php


$requete = $db->query('SELECT UPPER(nom) AS nom_maj FROM jeux_video');
while ($donnees = $requete->fetch())
{
echo $donnees['nom_maj'] . '<br />';
}
$requete->closeCursor();
?>
</body>
</html>