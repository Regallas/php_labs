<?php

    $value = $argv[1];
    
    $result = calculate($value);

    echo $result;

    function calculate(string $value): string
    {

        $str = str_split($value);
        $number = explode();
        $operationcounter = 0;
        $operations = [];
        $numbers[0] = $str[0];

        if (!preg_match("#^[0-9\-+]+$#", $value)) {
            return 'error';
        }

        if ($str[0] === '+' || $str[0] === '-') {
            return'Incorrect input';
        }

        foreach ($str as $sign) {
            if ($sign === '+') {
                $operations[$operationcounter] = '+';
            } 
            if ($sign === '-') {
                $operations[$operationcounter] = '-';
            }
            if ($operationcounter > 8) {
                return 'err';
            }
            $operationcounter++;
        }

        for ($i = 0, $j = 1, $k = 1; $i < 9; $i+=2, $j+=2, $k++) {
            if ($j < $operationcounter) {
                if ($operations[$j] === '+') {
                    $numbers[$k] = intval($numbers[$k - 1]) + intval($str[$i + 2]);
                    $answer = $numbers[$k];
                } 
                if ($operations[$j] === '-') {
                    $numbers[$k] = intval($numbers[$k - 1]) - intval($str[$i + 2]);
                    $answer = $numbers[$k];
                }
            } 
        }

        $value .= ' = ';
        $value .= $answer;

        return $value;
    }