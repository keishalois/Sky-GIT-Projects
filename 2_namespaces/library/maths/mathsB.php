<?php

namespace library\maths;

function doMathsB($first, $second, $operator) {
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
