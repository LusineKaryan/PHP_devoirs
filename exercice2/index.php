<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    $flowers = array(
                    "Rose",
                    "Lili",
                    "Jasmine",
                    "Hibiscus",
                    "Tulip",
                    "Sun Flower",
                    "Daffodil",
                    "Daisy");
    var_dump($flowers);
    unset($flowers[3]);
    echo "The array is: <br/>";
    print_r($flowers);
    ?>
    
</body>
</html>
