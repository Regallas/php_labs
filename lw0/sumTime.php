<?php

     $time1 = $argv[1];
     $time2 = $argv[2];

     $result = SumTime($time1, $time2);

     function SumTime(string $time1, string $time2): string
     {
        $valuetime1 = explode(':', $time1);
        $valuetime2 = explode(':', $time2);

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

        var_dump(implode(":", $newtime));
        $time .= $newtime;
        return $time;
     }
?>