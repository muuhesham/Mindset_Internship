<?php

include "./AnimalClass.php";

class Cat extends Animal {

    public function makeSound(){
        return "Cat:Mewoooo!<br>";
    }
    public function eat(){
        return "Cat: I'm Hungry. I need DRY FOOD NOW!<br>";
    }
}

class Dog extends Animal {

    public function makeSound(){
        return "Dog: HO HO HO HO !<br>";
    }
    PUBLIC FUNCTION eat(){
        return "Dog: ME TOO. I'm need DRY FOOD like Cat!<br>";
    }
}

class Bird extends Animal {
    
    public function makeSound(){
        return "Bird: SO SO SO SO!<br>";
    }

    public function eat(){
        return "Bird: I don't like you. I need only seeds!<br>";
    }
}

$dog = new Dog();
$cat = new Cat();
$bird = new Bird();

echo $cat->eat();
echo $cat->makeSound();
echo $dog->eat();
echo $dog->makeSound();
echo $bird->eat();
echo $bird->makeSound();

