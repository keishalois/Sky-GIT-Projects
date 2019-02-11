<?php

function doMathsA($first, $second, $operator) {
    switch($operator) {
     case '+':
        $result = $first + $second;
     break;
     
     case '-':
        $result = $first - $second;
     break;
 
     case '*':
        $result = $first * $second;
     break;
 
      case '/':
        $result = $first / $second;
     break;
}

    echo $result . "\n";
}