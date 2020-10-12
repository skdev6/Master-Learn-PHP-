<?php
// Class Method Properti
class Human{
    public $name;
    function sayHi($n){
        echo $this->$name = $n;
    }
}
class Cat{
    function sayHi(){
        echo "Meow";
    }
}
class Dog{
    function sayHi(){
        echo "Woof";
    }
}
$h1 = new Human();
$h2 = new Cat();
$h3 = new Dog();
$h1->sayHi("Sumon");
