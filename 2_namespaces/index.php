<?php

//include 'library/maths/mathsA.php';
//include 'library/maths/mathsB.php';

/* my way of trying set include path:
 
$new = dirname(__DIR__) . '/exercise11/library/maths/mathsB.php';
//echo "old path:";
//echo get_include_path();

set_include_path(
        get_include_path() . PATH_SEPARATOR . $new
        );*/

/*different way of doing set_include_path
set_include_path('library/maths');
include 'mathsA.php';
include 'mathsB.php'; */
//
//martinas way
$new = dirname(__DIR__) . '/exercise11/library/maths';
set_include_path(
        get_include_path() . PATH_SEPARATOR . $new
        );
echo "\n \n new path:";
echo get_include_path() . "\n";
include 'mathsA.php';
include 'mathsB.php';


echo "what is your first number? \n";
$first = stream_get_line(STDIN, 100, "\n");
echo "select an operator out of : + - * / \n" ;
$operator = stream_get_line(STDIN, 100, "\n");
echo "select a second number? \n" ;
$second = stream_get_line(STDIN, 100, "\n");


//this echo statement below just relies on the include function above

//echo doMathsA($first, $second, $operator);

/*the use statement imports the namespace called library\maths which it found 
in mathsB.php file because I included the mathsB.php at the top */

use library\maths;

/*after the use statement, you only need to refer to the namespace as maths as it
will know what you are referring to*/

echo maths\doMathsB($first, $second, $operator);
