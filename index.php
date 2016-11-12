<?php

function sum($num1, $num2) {
    return $num1 + $num2;
}

function subtract($num1, $num2)
{
    return $num1 - $num2;
}

echo "the sum is:" .sum(1,1);
echo "<br/>";
echo "the diff is: ". subtract(1,sum(1,1));
echo "<br/>";
echo "success!";