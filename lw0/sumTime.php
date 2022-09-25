<?php

     $time1 = $argv[1];
     $time2 = $argv[2];

     $result = sumtime($time1, $time2);
     
     echo $result;

     function sumtime(string $time1, string $time2): string
     {
        $valuetime1 = explode(':', $time1);
        $valuetime2 = explode(':', $time2);

        if(!preg_match("#^[0-9\:]+$#", $time1)) {
            return 'error';
        }
        if(!preg_match("#^[0-9\:]+$#", $time2)) {
            return 'error';
        }

        $newtime[0] = intval($valuetime1[0]) + intval($valuetime2[0]);
        $newtime[1] = intval($valuetime1[1]) + intval($valuetime2[1]);
        $newtime[2] = intval($valuetime1[2]) + intval($valuetime2[2]);

        if($newtime[0] >= 24 ){
            $newtime[0] -= 24;
        }
        if($newtime[1] >= 60){
            $newtime[0] += 1;
            $newtime[1] -= 60;
        }
        if($newtime[2] >= 60){
            $newtime[1] += 1;
            $newtime[2] -= 60;
        }

        $time = implode(":", $newtime);
        return $time;
     }