<?php

//Properties: you declare, populate and access them.
//Note: the $ sign is only used when defining the original property, not when accessing it.

class First {
    public $id = 23;
    public $name = 'John Doe';

    public function saySomething(){
        echo 'Something!';
    }
}

class Second extends First {

}

$second = new Second;
echo $second->name . ' is ' . $second->id .' years old. <br>';
echo $second->saySomething();