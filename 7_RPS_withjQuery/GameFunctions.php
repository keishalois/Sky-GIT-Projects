<?php

$userChoice = $_REQUEST["choice"];
//This gets the 'choice' from the HTTP Get request in JavaScript 
//and saves it into the userChoice variable
$computerChoice = randomComp();

//function to generate random computer choice
function randomComp() {
$options = ["Rock", "Paper", "Scissors"];
$rand = rand(0,2);
$random = $options[$rand];
return $random;
}

//function to apply logic of RPS games to generate an outcome
function logic($z, $t) {
 
switch($z) {
    case $z === $t:
        $answer = "It's a draw!\n";
    break;

    case $t === 'Rock' && $z === 'Paper':
    case $t === 'Paper' && $z === 'Scissors':
    case $t === 'Scissors' && $z === 'Rock':
        $answer = "YOU WIN - YAAAAS\n";  
    break;

    default:
        $answer = "Boooooo, u lost :( \n";
        break;
}

//send outcome out of function*/

return $answer;
}

echo nl2br("You chose " . $userChoice . " , " . "Computer chose " . $computerChoice . "\n");
echo $result = logic($userChoice, $computerChoice);

