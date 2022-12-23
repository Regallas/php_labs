<?php
require_once('..\vendor\user\lw2\src\ChocolateFactory.php');
require_once('..\src\Crackers.php');
require_once('..\src\OnionRings.php');

class Milka extends ChocolateFactory
{
    public function createSnack(string $type): Snack
    {
        if($type === "Крекеры") {
            $snack = new Cracker("Крекеры", "белый", " квадратиком");
            $snack->choiseToppings();
            return $snack;
        }

        if($type === "Луковые кольца") {
            $snack = new OnionRing("Луковые кольца", "без шоколада", " колечками");
            $snack->choiseToppings();
            return $snack;
        }
    }
}

$milka= new Milka;
$milka->orderSnack("Крекеры");
echo("\n");
$milka->orderSnack("Луковые кольца");