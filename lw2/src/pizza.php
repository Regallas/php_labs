<?php
abstract class Pizza
{

    protected string $name;
    protected string $sauce;
    protected array $toppings;
    protected string $shape;

    public function prepare(): void
    {
        echo ("Началась готовка пиццы {$this->name}") . PHP_EOL;
        echo ("Добавлен соус {$this->sauce}") . PHP_EOL;
        echo ("Добавлены топики: ");
        foreach ($this->toppings as $value) {
            echo $value . ', ';
        }
        echo (".") . PHP_EOL;
    }

    public function cut(): void
    {
        echo "Нарезать в виде " . $this->shape;
    }
}
