<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>HTTP POST</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    </head>
    <body>
  <!----      <form action="" method="POST">
           Username: <input  type="text" autofocus="true" name="username" required />
            Email: <input  type="email"   name="email" required />
            Date of Birth: <input  type="date" placeholder="DD/MM/YYYY"  name="birthdate" required />
            Country: <input  type="text"   name="country" required />
            <input class="btn btn-primary" type="submit" value="Submit">
        </form> --->
  
  <div class="jumbotron">
  <h1 class="display-4">Hello, you!</h1>
  <p class="lead">This is a little form to complete!</p>
  <hr class="my-4">
</div>
  <div class="container">
  <form action="" method="POST">
      <div class="col-md-4 mb-3">
                <label for="username">Username</label>
                        <div class="input-group">
                                <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                                </div>
               <input type="text" name="username" autofocus="true" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>
                                <div class="invalid-feedback">
                                 Please choose a username.
                                </div>
                        </div>
    </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Email" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Date of Birth</label>
    <div class="col-sm-10">
        <input type="date" class="form-control" name="birthdate" placeholder="DD/MM/YYYY" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="country" class="col-sm-2 col-form-label">Country</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="country"required>
    </div>
  </div>
            
            
  <div class="form-group row">
    <div class="col-sm-2">T&Cs</div>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1" required>
        <label class="form-check-label" for="gridCheck1">
          Agree to Terms and Conditions
        </label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
  </div>
        

        <?php
        if (!empty($_POST)) {
           echo "<h3>Welcome @$_POST[username]</h3>"; 
            echo "<h3>You live in $_POST[country]</h3>";
            echo "<h3>Your DOB is $_POST[birthdate]</h3>";
            echo "<h3>Your email address is $_POST[email]</h3>";
        }
        else{
        echo "<h4>You have not submitted any data to the server</h4>";
        }
        ?>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>   
    </body>
</html>
