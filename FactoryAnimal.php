<?php

class FactoryAnimal
{
    public function getAnimal($animal)
    {
        if ($animal == 'canine') {
            return new Dog();
        }
        return new Cat();
    }
}