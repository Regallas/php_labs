<?php
require_once "Pizza.php";
abstract class PizzaStore
{
    abstract function createPizza(string $type): Pizza;

    public function orderPizza(string $type): void
    {
        print ("Приветствуем в нашей пиццерии, какие будут пожелания?") . PHP_EOL;
        $pizza = $this->createPizza($type);
        $pizza->prepare();
        $pizza->cut();
    }
}
