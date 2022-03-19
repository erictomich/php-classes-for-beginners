<?php

include "./classes/GroupClass.php";


$group = new GroupClass();

$element = 'name';
print $group->$element;

function getVarName() {
    return 'description';
}

print $group->{getVarName()};


print $group->{'praQueServe'}();



?>