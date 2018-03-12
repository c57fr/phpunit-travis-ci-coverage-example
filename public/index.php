<?php
require '../vendor/autoload.php';

use Projects\Maths\Calculator;

$calc = new Calculator();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Calculator app</title>
  <meta charset="utf-8">
</head>
<body>
<h1>This is just a sample demo page.</h1>
<hr>
<?php

echo $calc->add(2, 3);
echo '<br>';
echo $calc->multiply(2, 3);

?>
<hr> 
En console:<br>

C:\laragon\www\phpunit-travis-ci-coverage-example (master)<br>
λ phpunit  --coverage-html public/src
<hr>
Puis aller sur:<br>
 <a href="http://phpunit-travis-ci-coverage-example/src/">page résultat du coverage</a>

</body>
</html>