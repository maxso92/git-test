<?php
// test
// lost 

class Test {

    public $simple_const = '123';
}


class SimpleClass extends Test
{
    // объявление свойства
    public $var = 'значение по умолчанию';

    // объявление метода
    public function displayVar() {
        echo $this->var;
        echo $this->simple_const;
    }
}
