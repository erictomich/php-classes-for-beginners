<?php


echo memory_get_usage() . "<br>"; // 36640

$a = str_repeat("Hello", 4242);

echo memory_get_usage() . "<br>"; // 57960

unset($a);

echo memory_get_usage() . "<br>"; // 36744