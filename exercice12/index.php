<?php
include "translate.php";
include "config.php";
if($_GET) {
    $obj = new translate();
    $res = $obj->translate($_GET['source'],$_GET['dest'],$_GET['q']);
    echo $res;
    exit();
   }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Переводчик</title>
    <script src="jquery-1.10.2.min.js"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <div id="content">
        <h1>Переводчик</h1>
        <table cellpadding="5px">
            <tr>
                <td>
                Язык источник:&nbsp;
                <select id="lang_source">
                <?php foreach($lang as $key=>$val) :?>
                <?php if($key =='en') :?>
                <option selected value="<?php echo $key; ?>"><?php echo $val?></option>
                <?php else :?>
                <option  value="<?php echo $key; ?>"><?php echo $val?></option>
                <?php endif; ?> 
                <?php endforeach;?>
                </select>
                </td>
                <td>
                Язык перевода:&nbsp;
                <select id="lang_dest">
                <?php foreach($lang as $key=>$val) :?>
                <?php if($key =='ru') :?>
                <option selected value="<?php echo $key; ?>"><?php echo $val?></option>
                <?php else :?>
                <option  value="<?php echo $key; ?>"><?php echo $val?></option>
                <?php endif; ?>
                <?php endforeach;?> 
                </select>
                </td>
            </tr>
            <tr>
                <td>
                <textarea id="source" cols="50" rows="5"></textarea>
                </td>
                <td>
                <div id="dest" cols="50" rows="5"></div>
                <div id="res"></div>
                </td>
            </tr>
        </table>
        <h3 id="click">Перевести</h3>
    </div> 
  </body>
</html>