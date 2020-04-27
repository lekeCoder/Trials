<?php
//Please write a program that prints the numbers from 1 to 100.
//But for multiples of three print “Research” instead of the number and
//for the multiples of five print “Square”.
//For numbers which are multiples of both three and five print “Research Square” (note the space).*

    for($i = 1; $i <= 100; $i++){
        if($i%3==0 && $i%5 == 0){
            print "Research Square". PHP_EOL;
            continue;
        }
        if($i%3==0){
            print "Research". PHP_EOL;
            continue;
        }
        if($i%5 == 0){
            print "Square". PHP_EOL;
            continue;
        }
        print $i. PHP_EOL;

    }