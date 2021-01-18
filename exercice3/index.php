<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $myJson = '{"Title"; "La réalité augmentée avec Unity",
        "Author": "Stéphane DORLAC",
        "Detail":
        {
        "Publisher": "D-Booker",
        "Number": 1
        }
        }';

    function book($item,$key){
        echo "la clé".$key." contient l'élément ".$item. "<br/>";
    }
    
    $array = json_decode ($myJson, true);
    array_walk_recursive($array, "book"); //premier argument est un array et deuxieme est une fonction

    ?>
</body>
</html>