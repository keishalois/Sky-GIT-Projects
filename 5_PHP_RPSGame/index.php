<?php
//function to generate random computer choice
function randomComp() {
$picks = ["R", "P", "S"];
$rand = rand(0,2);
$random = $picks[$rand];
return $random;
}
//function to convert player's input to Rock, Paper or Scissors
function convertPlayer($x) {
    $playChoice = $x;
    if($playChoice == 'R' ){
        $playChoice = 'Rock';
    }
    else if($playChoice == 'S' ) {
        $playChoice = 'Scissors';
    }
    else {
        $playChoice = 'Paper';
    }
    return $playChoice;
}
//function to convert computer's choice to Rock, Paper or Scissors
function convertComp($y) {
    $compChoice = $y;
    if($compChoice == 'R' ){
        $compChoice = 'Rock';
    }
    else if($compChoice == 'S' ) {
        $compChoice = 'Scissors';
    }
    else {
        $compChoice = 'Paper';
    }
    return $compChoice;
}

//function to apply logic of RPS games to generate an outcome
function logic($z, $t) {
 
switch($z) {
    case $z === $t:
        $answer = " it's a draw!\n";
    break;

    case $t === 'Rock' && $z === 'Paper':
    case $t === 'Paper' && $z === 'Scissors':
    case $t === 'Scissors' && $z === 'Rock':
        $answer = " WINS - YAAAAS\n";  
    break;

    default:
        $answer = " boo, u lost\n";
        break;
}
/*OLD IF STATEMENT FOR LOGIC FUNCTION BUT REPLACED BY SWITCH STATEMENT
    //start with a draw situation
 if ($z === $t) {
    $answer = " it's a draw!\n";
}
//do a situation where player wins
else if ($t === 'Rock' && $z === 'Paper' || $t === 'Paper' && $z === 'Scissors' || $t === 'Scissors' && $z === 'Rock') {
    $answer = " WINS - YAAAAS\n";
}
//otherwise computer wins
else {
   $answer = " boo, u lost\n";
}
//send outcome out of function*/

return $answer;
}

//start game
echo "Welcome to Rock, Paper, Scissors! \n";
        
echo "What is your name? \n";
//store user name
$name = stream_get_line(STDIN, 100, "\n");
//enter loop
$g = 0;
while($g = 1) {
echo "Do you want to play - Y or N \n";
$game = stream_get_line(STDIN, 100, "\n");
if($game === "Y" || $game === 'y' || $game === 'yes' || $game === 'Yes') {
echo "Hello " . $name . " - lets play! \n";
//ask user for R , P or S and repeat until they select one of those letters
do {   
 echo $name . " - what is your choice... rock (enter R), paper (enter P) or scissors (enter S)?\n";
    $playerChoice = stream_get_line(STDIN, 100, "\n");
 echo $name . " you chose : " . $playerChoice . "\n"; }
 while ($playerChoice != 'R' && $playerChoice != 'P' && $playerChoice != 'S');

//uses function to convert players input to word
 $playChoice = convertPlayer($playerChoice);
 //generates computer choice using function
 $computerChoice = randomComp();
 //uses function to convert computer choice
 $compChoice = convertComp($computerChoice);
 
 //display what the player chose and what the computer chose
 echo 'GAMEPLAY - ' . $name . ' chose: ' .$playChoice.' - Computer chose: '.$compChoice . "\n";
 
 //apply logic of rock paper scissors game to generste outcome
 $endgame = logic($playChoice , $compChoice);
 echo $name . $endgame; 
}
//exit game because player didnt choose yes
else {
    echo "See ya";
    break;
}
}
