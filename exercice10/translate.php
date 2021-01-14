<?php
 if (isset($_POST['en'])){
    function en(){
    // en langue
    $cat= "cat";
    $dog= "dog";
    $house = "house";
    $student = "student";
    $table = "table";
    $apple = "apple";
    $en = $cat.' '.$dog.' '.$house.' '.$student.' '.$table.' '.$apple;
    return $en;
    }
    echo en();
 }


 if (isset($_POST['fr'])){
    function fr(){
        // fr langue
    $chat = "chat";
    $chien = "chien";
    $maison = "maison";
    $élève = "élève";
    $table = "table";
    $pomme = "pomme";
    $fr = $chat.' '.$chien.' '.$maison.' '.$élève.' '.$table.' '.$pomme;
    return $fr;
    }
    echo fr();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
    <div class="c"></div>
    <div class="f">
    <form action="" method="post">
    <input type="submit" name="en" value="EN">
    <input type="submit" name="fr" value="FR">
    </form>
    </div>

    <h2>Entrez un mot</h2>
    <form class="" action="yat.php" method="post">
        <input type="text" name="itext" value="" autofocus/>
        <input type="submit" name="ok" value="Traduir">
    </form>

</body>
</html>

