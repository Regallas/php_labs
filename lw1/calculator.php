<?php
    class Calculator {
        private $value;
        private $sumvalue;
        private $minusvalue;
        private $productvalue;
        private $divisionvalue;
        private $finalvalue;

        public function sum($sumvalue) {

            $this->sumvalue = $sumvalue;

            $this->value += $sumvalue;
            return $this;
        }

        public function minus($minusvalue) {

            $this->minusvalue = $minusvalue;

            $this->value -= $minusvalue;
            return $this;
        }

        public function product($productvalue) {

            $this->productvalue = $productvalue;

            $this->value *= $productvalue;
            return $this;
        }

        public function division($divisionvalue) {

            $this->divisionvalue = $divisionvalue;
                if ($divisionvalue === 0) {
                    $this->value = 0;
                    return $this; 
                }

            $this->value /= $divisionvalue;
            return $this;
        }

        public function getResult() {
            $finalvalue = $this->value;
            return $finalvalue;
        }
    }

$calculator = new Calculator();

echo $calculator->sum(100)->sum(15)->division(0)->minus(7)->getResult();
