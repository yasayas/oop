<?php

class Animal {
    public $name;
    public $legs;
    public $cold_blooded;
    
    public function __construct($name) {
        $this->name= $name;
        $this->legs= 2;
        $this->cold_blooded = "false";
    }
    
}

class Ape extends Animal {
    function yell(){
        echo "Auooo";
    }
}
class Frog extends Animal {
    function jump(){
        echo "Hop hop";
    }
}

$sheep = new Animal("shaun");

echo $sheep->name; // "shaun"
echo $sheep->legs; // 2
echo $sheep->cold_blooded; // false

$sungokong = new Ape("kera sakti");
$sungokong->yell(); // "Auooo"

$kodok = new Frog("buduk");
$kodok->jump() ; // "hop hop"

?>