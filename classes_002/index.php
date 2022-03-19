<?php

include "./classes/GroupClass.php";

$group = new GroupClass();

$group->setId(1);

$group->setName('Trabalho');

$group->setDescription('Área de trabalho');

$group->setEvent('Estudar testes');

$group->setEvent('Ler tickets');

//print $group->name;

print $group->getId() . " - ";

print $group->getName() . " - ";

print $group->getDescription() . "<br><br>";

foreach($group->getEvents() as $key => $value) {
    print ($key+1) . ' - ' . $value . " <br> ";
}

?>