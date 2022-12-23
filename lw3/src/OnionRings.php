<?php
require_once('..\vendor\user\lw2\src\Snack.php');

class OnionRing extends Snack
{
    public function __construct(string $name, string $chocolate, string $shape)
    {
        $this->name = $name;
        $this->chocolate = $chocolate;
        $this->shape = $shape;
    }

    public function choiseToppings(): void
    {
        for ($i = 0; $i < 2; $i++) {

            echo ("Выбор начинки(");
            echo $i + 1;
            echo ("/2)") . PHP_EOL;
            echo ("1 - сырный соус") . PHP_EOL;
            echo ("2 - крабовые палочки") . PHP_EOL;

            $choise = readline("Ваш выбор: ");
            if ($choise === 1) {
                $this->toppings[$i] = "сырный соус";
            }
            if ($choise === 2) {
                $this->toppings[$i] = "крабовые палочки";
            }
        }
    }
}