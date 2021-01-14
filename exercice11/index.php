<?php
function translate($mot){
    $query = http_build_query(
        array(
        'text' => $mot,
        'lang' => 'en-fr'
        )
    );
    $response = file_get_contents('https://translate.yandex.net/api/v1.5/tr.json/translate?'.$query);
    $data = json_decode($response, true);
    $text = $data['text'][0];
    return $text;
}
 
?>
<!DOCTYPE html>
<html>
  <head>
    <link href="style.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title></title>
  </head>
  <body>
    <h2>Traducteur Anglais-Francais</h2>
    <form class="" action="index.php" method="post">
      <input type="text" name="itext" value="" autofocus/>
      <input type="submit" name="ok" value="Traduire">
    </form>
  </body>
</html>
