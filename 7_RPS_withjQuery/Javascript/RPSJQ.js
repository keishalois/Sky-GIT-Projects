$(document).ready(function() {
    
$("img").on({
  mouseenter: function(){
    $(this).css("background-color", "lightgray");
  }, 
  mouseleave: function(){
    $(this).css("background-color", "lightblue");
  },
  click: function(RPS) {
    $("#result").load("GameFunctions.php?choice=" + String(RPS.target.id));
    }
  });


});


