<?php
    function faculteit($getal){
        if($getal == 0){
            return 1;
        }
        elseif ($getal < 0){
            return "Faculteit van een negatief getal kan niet, invoer was ".$getal;
        }
        else {
            $output = 1;
            for ($i = $getal; $i >= 1; $i--){
                $output *= $i;
            }
            return $output;
        }
    }

