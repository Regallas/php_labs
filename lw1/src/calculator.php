<?php
class Calculator
{
    private float $value = 0;

    public function sum($sumvalue): self
    {

        $this->sumvalue = $sumvalue;

        $this->value += $sumvalue;
        return $this;
    }

    public function minus($minusvalue): self
    {

        $this->minusvalue = $minusvalue;

        $this->value -= $minusvalue;
        return $this;
    }

    public function product($productvalue): self
    {

        $this->productvalue = $productvalue;

        $this->value *= $productvalue;
        return $this;
    }

    public function division($divisionvalue): self
    {

        $this->divisionvalue = $divisionvalue;
        if ($divisionvalue === 0) {
            $this->value = 0;
            return $this;
        }

        $this->value /= $divisionvalue;
        return $this;
    }

    public function getResult(): float
    {
        $finalvalue = $this->value;
        return $finalvalue;
    }
}

$calculator = new Calculator();

echo $calculator->sum(100)->sum(15)->division(0)->minus(7)->getResult();
