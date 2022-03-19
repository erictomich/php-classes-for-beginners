<?php

class GroupClass {

    public $name = 'Trabalho';
    public $description = 'Testar a funcionalidade';

    public function __construct() {
        echo "construiu<br>";
    }

    function praQueServe() {
        print 'Pra que serve ?';
    }


}