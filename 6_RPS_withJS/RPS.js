/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function play(RPS){
    //RPS takes Rock Paper or Scissors from the image chosen and the following lines are AJAX
    xhttp= new XMLHttpRequest();
        xhttp.onreadystatechange = function(){
            if(this.readyState===4 && this.status ===200){
//this says we want to send back the result of this function to the element with the ID=result
                document.getElementById("result").innerHTML = this.responseText;
            }
        };
//this opens the Game Functions PHP file and sends the RPS - Rock, Paper or Scissors as 'choice'
    xhttp.open("GET", "GameFunctions.php?choice="+ RPS, true); 
    xhttp.send();
            }
      
function change(event){
        event.style.backgroundColor = "#6BF97C";
        event.style.border = "thick solid #0A8819";
            }
            
function revert(event){
        event.style.backgroundColor = "white";
        event.style.border = "hidden";
        
            }