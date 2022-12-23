<?php
require_once('..\vendor\user\lw2\src\ChocolateFactory.php');
require_once('..\src\Wand.php');
require_once('..\src\MMDMS.php');

class Pocky extends ChocolateFactory
{
    public function createSnack(string $type): Snack
    {
        if($type === "Палочки") {
            $snack = new Wand("Палочки", "тёмный", " трубочкой");
            $snack->choiseToppings();
            return $snack;
        }

        if($type === "M&M's") {
            $snack = new MMDMS("M&M's", "молочный", " круглешками");
            $snack->choiseToppings();
            return $snack;
        }
    }
}

$pocky = new Pocky;
$pocky->orderSnack("Палочки");
echo("\n");
$pocky->orderSnack("M&M's");