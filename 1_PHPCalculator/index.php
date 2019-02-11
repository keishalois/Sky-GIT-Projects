<?php
//ask user for first number
echo "Gimme a number?\n";
//store input as num1
$num1 = stream_get_line(STDIN, 100, "\n"); 
//ask user for second number
echo "Give me another number?\n";
//store input as num2
$num2 = stream_get_line(STDIN, 100, "\n"); 
//check num1 and num2 variables actually contain numbers (intergers or float) otherwise cancel.
    if (is_numeric($num1) && is_numeric($num2)) {
            echo "Number A is " . $num1 . "\n";
            echo "Number B is " . $num2 . "\n";
            echo "Calculation is A +,-,/,* B." . "\n";
        }
     else {
        die('That aint a number.');
    }
    //ask user for the operator they would like to use
 echo "Do you want to add (+) subtract (-) divide (/) or multiply (*)?\n";
 //store the selected operator
    $operator = stream_get_line(STDIN, 100, "\n"); 
 //check that the user is not dividing by zero
    if ($num2 == 0 && $operator == "/" || $operator == "divide" || $operator == "Divide") {
         die('You cannot divide by zero.');    
          }
    else //if they are not dividing by zero then implement the calculations as below
    { switch($operator) {
     case '+':
     case 'add':
     case 'Add':
        $result= $num1+$num2;
         break;
     
     case '-':
     case 'subtract':
     case 'Subtract':
         $result= $num1-$num2;
     break;
 
     case '*':
     case 'multiply':
     case 'Multiply':
         $result= $num1*$num2;
     break;
 
     case '/':
     case 'divide':
     case 'Divide':
         $result= $num1/$num2;
     break;
     
     default:
        die('Choose a right operator.');
     break;
 }
 echo $result;}
?>




//while ($operator < 5) {
    $operator++;
     switch($operator) {
     case "1":
        $result= $num1+$num2;
         break;
     
     case "2":
         $result= $num1-$num2;
     break;
 
     case "3":
         $result= $num1*$num2;
     break;
 
     case "4":
         $result= $num1/$num2;
     break;
 
     default:
     die('You quit!');
     break;
    }