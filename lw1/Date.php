<?php
    class Date {

        private int $day;
        private int $month;
        private int $year;
        private int $minusDay;
        private string $en;

        public function __construct(int $day, int $month, int $year) {


            $this->month = $month;
                if($month < 0 || $month > 12) {
                    $month = 1;
                    $this->month = $month;
                }

            $this->year = $year;
                if($year < 2000) {
                    $year = 2000;
                    $this->year = $year;
                }

            $this->day = $day;
                if($day < 0 || $day > 31) {
                    $day = 1;
                    $this->day = $day;
                }
                if($month % 2 === 0 && $month !== 2 && $day >= 31) {
                    $day = 30;
                    $this->day = $day;
                }
                if($month === 2 && $day >= 30) {
                    $day = 28;
                    $this->day = $day;
                }
                if($month === 2 && $day === 29 
                    && $year % 400 === 0 || ($year % 4 === 0 && $year % 100 !== 0)) {
                        return $this->day = $day;
                    } 

            return "{$this->day}.{$this->month}.{$this->year}";
        }

        public function minusDay(int $minusDay) {

            $this->minusDay = $minusDay;

            if($this->day < $minusDay){
                $this->month -= 1;
                if($this->month % 2 === 0 && $this->month !== 2) {
                    $this->day += 30;
                }
                else if($this->month === 2) {
                    $this->day += 28;
                }
                else if($this->month === 2 && $this->year % 400 === 0 
                        || ($this->year % 4 === 0 && $this->year % 100 !== 0)) {
                        $this->day += 29;
                } 
                else if($this->month % 2 === 1) {
                    $this->day += 31;
                }
            }

            $this->day -= $minusDay;

            return "{$this->day}.{$this->month}.{$this->year}";
        }
        public function __toString() {
            
            return "{$this->day}.{$this->month}.{$this->year}";
        }
        /*public function date_diff(int $day, int $month, int $year) {

            $dy = $this->day;
            $mn = $this->month;
            $yr = $this-> year;

            if($this->day < $dy){
                $this->month -= 1;
                if($this->month % 2 === 0 && $this->month !== 2) {
                    $this->day += 30;
                }
                else if($this->month === 2) {
                    $this->day += 28;
                }
                else if($this->month === 2 && $this->year % 400 === 0 
                        || ($this->year % 4 === 0 && $this->year % 100 !== 0)) {
                        $this->day += 29;
                } 
                else if($this->month % 2 === 1) {
                    $this->day += 31;
                }
            }

            $this->day -= $dy;

            if($this->month < $mn){
                $this->year -= 1;
                $this->month += 12;
            }

            $this->month -= $mn;

            if($this->year < $yr) {
                $this->year = $yr + 2000;
            }
            $this->year -= $yr;
            return "{$this->day}.{$this->month}.{$this->year}";
        }*/

        public function format(string $en) {
            if($en === 'ru') {
                return "{$this->day}.{$this->month}.{$this->year}";
            }
            if($en === 'en') {
                return "{$this->year}-{$this->month}-{$this->day}";
            }
        }
    }

    $date = new Date(10, 10, 2004);
    $date1 = new Date(12, 10, 2004);
    echo $date;
    echo "\n";
    $date->minusDay(4);
    echo $date;
    echo "\n";
    /*$date->date_diff(12, 10, 2004);
    echo $date;*/
    $result = $date->format('en');
    echo $result;
    

    