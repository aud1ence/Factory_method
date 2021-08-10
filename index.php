<?php

require "Animal.php";
require "Cat.php";
require "Dog.php";
require "FactoryAnimal.php";

$animalFactory = new FactoryAnimal();
$animal1 = $animalFactory->getAnimal('feline');
echo "$animal1 sound: " . $animal1->makeSound();
echo "<br>";

$animal2 = $animalFactory->getAnimal('canine');
echo "$animal2 sound: " . $animal2->makeSound();
