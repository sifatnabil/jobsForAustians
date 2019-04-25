<?php session_start();

if(isset($_SESSION['email'])){
    header("Location: mainpage.php");
}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/signin.css">

    <title>Sign In</title>
  </head>
  <body>
   
   <div class="h-100 background">
        <div class="form-container col-md-5 col-sm-9">
            <form action="includes/signin_validate.php" class="form-group" method="post">
              <h1 class="text-center">Welcome</h1>
              
               <div class="input-field col-md-10">
                <label for="email">Email</label>
                 <input type="email" class="form-control" name="email">
               </div>
               
               <div class="input-field col-md-10">
                  <label for="password">Passoword</label>
                   <input type="password" class="form-control" name="password">
               </div>
               
               <div class="lower-body container">
                  <input type="submit" value="Sign In" name="submit" class="btn btn-success  col-md-10">
                   <p><a href="">Forgot Password?</a></p>
                   
                   <p id="lower-text">Not a member? <a href="signup.php">Click Here to Sign Up</a></p>
               </div> 
               
               <?php
                if(isset($_GET['emptyfield'])){
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Fill all the <strong>Fields</strong>.
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>';
                }
                
                
                else if(isset($_GET['nouser'])){
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>User</strong> does not <strong>exist</strong>.
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>';
                }
                
                else if(isset($_GET['wrongpassword'])){
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Password did not <strong>match</strong>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>';
                }
            ?>
            </form>
            
       </div>        
   </div>
    
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>