
<?php
if(!isset($_SESSION)) session_start();

if(isset($_SESSION['email'])) header("Location: mainpage.php");

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script" rel="stylesheet">
    <link rel="stylesheet" href="css/signup.css">

    <title>Sign Up</title>
  </head>
  <body>
  
  
   
   <div class="h-100">
      <div class="row h-100">
        <div class="col-lg-6 col-md-6 col-sm-12 img-holder"></div>
        <div class="col-lg-6 col-md-6 col-sm-12 form-container">
           <h1 class="text-center">Join Us Today</h1>
          
            <form class="form-group" action="includes/signup_validate.php" method="post">
                <div>
                    <label for="first-name"></label>
                    <input type="text" name="first-name" placeholder="First Name" class="form-control">
                    <?php
                        if(isset($_GET["firstname"]))
                            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                              <strong>First Name</strong> can not be empty.
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>';
                    
                        elseif(isset($_GET["firstnamechar"])){
                            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                              Only <strong>Letters</strong> and <strong>Spaces</strong> allowed.
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>';
                        }
                    ?>
                 </div>
                <div>
                    <label for="last-name"></label>
                    <input type="text" name="last-name" placeholder="Last Name" class="form-control" >
                    <?php
                        if(isset($_GET["lastname"]))
                            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                              <strong>Last Name</strong> can not be empty.
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>';
                    
                        elseif(isset($_GET["lastnamechar"])){
                            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                              Only <strong>Letters</strong> and <strong>Spaces</strong> allowed.
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>';
                        }
                    ?> 
                </div>
                <div>
                    <label for="email"></label>
                    <input type="email" name="email" placeholder="Email" class="form-control" >
                    <?php
                        if(isset($_GET["email"]))
                            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                              <strong>Email</strong> can not be empty.
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>';
                    
                        elseif(isset($_GET["invalidemail"])){
                            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                              Please Enter a <strong>Valid</strong> email.
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>';
                        }
                    
                        elseif(isset($_GET["userexists"])){
                            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                User already <strong>exists</strong>.
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>';
                        }
                    ?> 
                </div>
                
                <div>
                    <label for="password"></label>
                    <input type="password" name="password" placeholder="Password (Minimum 6 characters)" class="form-control" >
                    <?php
                        if(isset($_GET["password"]))
                            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                              <strong>Password</strong> can not be empty.
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>';
                    
                        elseif(isset($_GET["shortpassword"])){
                            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                              Password too <strong>short</strong>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>';
                        }
                    ?> 
                </div>
                
                <div>
                    <label for="confirm-password"></label>
                    <input type="password" name="confirm-password" placeholder="Confirm Password" class="form-control" >
                    <?php
                        if(isset($_GET["password"]))
                            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                              <strong>Password</strong> can not be empty.
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>';
                    
                        elseif(isset($_GET["passwordmismatch"])){
                            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                              Password did not <strong> match </strong>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>';
                        }
                    ?> 
                </div>
                
                <div class="lower-body">
                    <input type="submit" class="btn btn-success" name="submit" value="Sign Up">
                    <p>Already Have an account? <a href="signin.php">Click Here to Sign In</a></p>
                </div>
            </form>
        </div>
      </div>
    </div>
    
    
    
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>