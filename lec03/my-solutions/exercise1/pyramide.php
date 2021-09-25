<?php

    function pyramide(int $times, string $symbol){
        $toPrint = $symbol;
        for ($x = 0; $x <= $times; $x++) {
            echo "$toPrint \n";
            $toPrint.=$symbol;
        }
    }

    pyramide(5,"#")

?>