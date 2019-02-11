<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>HTTP GET</title>
    </head>
    <body>
        <h1>Testing an HTTP Get Request Using PHP's SuperGlobals</h1>
      <form action="" method="GET | POST">
           Name: <input  type="text" autofocus="true" name="name" required />
           Hobby: <input  type="text" name="hobby" placeholder="pottery?" required />
           Fave Food: <input  type="text" placeholder="pizza?"  name="food" required />
           Pet: <input  type="text"   name="pet" placeholder="cat?" required />
            <input type="submit" value="Submit">
        </form>  
        
      
        <?php
        if (!empty($_GET)) {
            echo "<h2>Welcome $_GET[name]</h2>"; 
            echo "<h2>Your hobby is: $_GET[hobby]</h2>";
            //foreach($_GET as $key => $value){
            //echo "<h4>$key has a value of $value</h4>";
            echo "<h4>name has a value of $_GET[name]</h4>";
            echo "<h4>hobby has a value of $_GET[hobby]</h4>";
            echo "<h4>food has a value of $_GET[food]</h4>";
            echo "<h4>pet has a value of $_GET[pet]</h4>";
            }
        
        else{
        echo "<h2>We do not have your name or hobby information</h2>";
        }
        ?>
        <p>There won't be any output if you forget to enter some query parameters such as:</p>
        <h4>?name=Lisa&hobby=Playing the Saxophone</h4>
        <p>to the end of the url.</p>
       
    </body>
</html>
