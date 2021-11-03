<?php 
$number=0;
while ($number<=99): 
    $number++;
    if (!($number%3) && !($number%5)) {
        echo "</br>"."FizzBuzz";
    }
    elseif (!($number%3)) {
        echo "</br>"."Fizz";
    } 
    elseif (!($number%5)) {
        echo "</br>"."Buzz";
    }
    else {
        echo "</br>".$number;
    }
endwhile;
?>
