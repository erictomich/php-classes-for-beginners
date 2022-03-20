<?php
//https://kevinsmith.io/modern-php-without-a-framework
// design pattern https://www.youtube.com/watch?v=arAz2Ff8s88

declare(strict_types=1);

require_once dirname(__DIR__) . '/classes_003/vendor/autoload.php';

//include('./src/HelloWorld.php');

$helloWorld = new \ExampleApp\HelloWorld();
$helloWorld->announce();