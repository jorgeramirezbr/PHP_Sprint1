<?php
declare(strict_types = 1);

interface Sound {
    function makeSound();  
}

//No  se puede instanciar por ser abstract
abstract class Animal {
    public $name;

    function __construct($name){
        $this->name = $name;
    }
}

class Dog extends Animal implements Sound {
    function makeSound()
    {
        $sound = "'Bup, bup!'";
        return $sound;
    }
}

class Cat extends Animal implements Sound {
    function makeSound()
    {
        $sound = "'Meu!'";
        return $sound;
    }
}

$animal1 = new Dog("Firulais");
$animal2 = new Cat("Tom");

echo "My " . $animal1->name . " says " . $animal1->makeSound() . " everyday<br>";
echo "My " . $animal2->name . " says " . $animal2->makeSound() . " everyday<br>";

?>