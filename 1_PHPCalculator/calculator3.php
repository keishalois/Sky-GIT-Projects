<?php
//introduce functions to calculator
function add($x,$y) {
    $result = $x + $y;
    return $result;
}
function minus($x,$y) {
    $result = $x - $y;
    return $result;
}
function multiply($x,$y) {
    $result = $x * $y;
    return $result;
}
function divide($x,$y) {
    $result = $x / $y;
    return $result;
}

function printMenu() {
echo "What Operator would you like to use?\n";
echo "Select 1 for addition.\n"; 
echo "Select 2 for subtraction.\n";
echo "Select 3 for multiply.\n";
echo "Select 4 for division.\n";
echo "Select 5 for quit.\n";
}

echo "Welcome to the calculator!\n";
$play=0;
while($play = 1) {

//ask user for operator
echo printMenu();
//store value as operator
$operator = stream_get_line(STDIN, 100, "\n");
//exit if they select 5 using if statement
if($operator != 5 && $operator < 5 && is_numeric($operator)) {
//ask user for number if they pick a valid operator
do {echo "Give me a number?\n";
//store input as num1
        $num1 = stream_get_line(STDIN, 100, "\n"); 
//ask user for second number
    echo "Give me another number?\n";
//store input as num2
        $num2 = stream_get_line(STDIN, 100, "\n"); }
//check num1 and num2 variables actually contain numbers (intergers or float) otherwise cancel.
while (!is_numeric($num1) || !is_numeric($num2));
echo "Number A is " . $num1 . "\n";
echo "Number B is " . $num2 . "\n";

if ($num2 != 0 || $operator != "4") {

switch($operator) {
     case '1':
        $result = add($num1,$num2);
     break;
     
     case '2':
         $result = minus($num1,$num2);
     break;
 
     case '3':
         $result = multiply($num1,$num2);
     break;
 
     case '4':
         $result = divide($num1,$num2);
     break;
}

    echo $result . "\n";
}
else {
    echo "You cannot divide by zero. \n";
}
}
else {
    die('You quit!');
}
}
