
<?php

require(__DIR__."/../vendor/autoload.php");

$test = new Lic\Test\Test("Hola");
$say = $test->say();

echo $say;

