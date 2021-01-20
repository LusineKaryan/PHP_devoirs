<html>
 <head>
  <title>Тестируем PHP</title>
 </head>
 <body>
 <form action="action.php" method="post">
 <p>Ваше имя: <input type="text" name="name" /></p>
 <p>Ваш возраст: <input type="text" name="age" /></p>
 <p><input type="submit" /></p>
</form>

<?php echo "Какой-то текст"; ?>
Нет новой строки
<?= "А сейчас, новая строка" ?>

<h1>Это <?php # echo "простой";?> пример</h1>
<p>Заголовок вверху выведет 'Это пример'.</p>


<?php
// Если это целое, увеличить на четыре
$an_int = 12;
if (is_int($an_int)) {
    $an_int += 4;
}
echo "$an_int";
echo "<br/>";


$a_bool = TRUE; 
echo gettype($a_bool); // выводит: boolean
// Если $a_bool - это строка, вывести её
// (ничего не выводит)
if (is_string($a_bool)) {
    echo "Строка: $a_bool";
}

var_dump((bool) "");        // bool(false)
var_dump((bool) 1);         // bool(true)
var_dump((bool) -2);        // bool(true)
var_dump((bool) "foo");     // bool(true)
var_dump((bool) 2.3e5);     // bool(true)
var_dump((bool) array(12)); // bool(true)
var_dump((bool) array());   // bool(false)
var_dump((bool) "false");   // bool(true)


$large_number = 9223372036854775807;
var_dump($large_number);                     // int(9223372036854775807)

$large_number = 9223372036854775808;
var_dump($large_number);                     // float(9.2233720368548E+18)

$million = 1000000;
$large_number =  50000000000000 * $million;
var_dump($large_number);                     // float(5.0E+19)


var_dump(25/7);         // float(3.5714285714286)
var_dump((int) (25/7)); // int(3)
var_dump(round(25/7));  // float(4)

echo (int) ( (0.1+0.7) * 10 ); // выводит 7!


$x = 8 - 6.4;  // which is equal to 1.6
$y = 1.6;
var_dump($x == $y); // is not true
?>
 </body>
</html>