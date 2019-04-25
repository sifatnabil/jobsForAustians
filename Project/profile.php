<?php

if(!isset($_SESSION)) session_start();

if(!isset($_SESSION['email'])) {
    header("Location: signin.php");
    exit();
}

include 'includes/personalinfo.php';
include 'includes/database.php';
$id = $_SESSION['id'];
$query = "SELECT * FROM user_info WHERE userid = '$id'";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($result);

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
    
    <!-- Google Fonts   -->
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,700" rel="stylesheet">

    
    <!-- Custom CSS   -->
    <link rel="stylesheet" href="css/profile.css">

    <title>User Profile</title>
  </head>
  <body>
   <?php include 'includes/header_check.php'; ?>
    <style><?php include 'css/header.css'; ?></style>
   
    <div class="container profile-head">
        
    </div>
    
<!--
    <div class="container name-container">
        <p id="para" class="h-100">
            <strong><?php echo $_SESSION['name']; ?></strong><br>
            <strong><?php echo $_SESSION['email']; ?></strong>
        </p>
    </div>
-->
    
    <div class="container info-container">
       
       <div class="row">
          <div class="col-md-3 col-sm-12 no-gutter">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link my-nav active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Profile</a>
              <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Upload a CV</a>
              <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Custom CV</a>
              <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
            </div>
          </div>
          <div class="col-md-9 col-sm-12">
            <div class="tab-content" id="v-pills-tabContent">
              
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                  <div class="row justify-content-center">
                     <div class="col-md-3 col-sm-12">
                         <label for="first-name">First Name: </label>
                     </div> 
                     <div class="col-md-5 col-sm-12">
                        <?php echo $firstName; ?>
                     </div>
                  </div>
                  
                  <div class="row justify-content-center">
                     <div class="col-md-3 col-sm-12">
                         <label for="last-name">Last Name: </label>
                     </div> 
                     <div class="col-md-5 col-sm-12">
                         <?php echo $lastName; ?>
                     </div>
                  </div>
                  
                  <div class="row justify-content-center">
                     <div class="col-md-3 col-sm-12">
                         <label for="email">Email: </label>
                     </div> 
                     <div class="col-md-5 col-sm-12">
                         <?php echo $email; ?>
                     </div>
                  </div>
                  
                  <div class="row justify-content-center">
                     <div class="col-md-3 col-sm-12">
                         <label for="dob">Date of Birth: </label>
                     </div> 
                     <div class="col-md-5 col-sm-12">
                         <?php echo date("j F Y", $dob); ?>
                     </div>
                  </div>
                  
                  <div class="row justify-content-center">
                     <div class="col-md-3 col-sm-12">
                         <label for="address">Address: </label>
                     </div> 
                     <div class="col-md-5 col-sm-12">
                         <?php echo $address; ?>
                     </div>
                  </div>
                  
                  <div class="row justify-content-center">
                     <div class="col-md-3 col-sm-12">
                         <label for="phone">Phone Number: </label>
                     </div> 
                     <div class="col-md-5 col-sm-12">
                         <?php echo $phone; ?>
                     </div>
                  </div>
                  
                  <div class="row justify-content-center">
                      <button type="button" class="btn btn-success col-md-3 profile-edit-btn" data-toggle="modal" data-target="#exampleModal" data-backdrop="static" data-keyboard="false">Edit</button>
                      
                      <?php include 'includes/personalinfo.php' ?>
                  </div>
                  
              </div>
              
              <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <form action="includes/upload.php" method="post" enctype="multipart/form-data">
                        <input type="file" name="file">
                        <button type="submit" name="submit" class="btn btn-success" id="cv-save-btn">Save</button>
                    </form>
                    <div class="row justify-content-center">
                       <?php if($row['cv'] == NULL) echo '<div class="col-md-3 cv-box-empty">';
                            else echo '<div class="col-md-3 cv-box-filled">';
                
                        ?>
                     </div>
                    </div>
                    <div class="row justify-content-center">
                       <?php if($row['cv'] != NULL){
                            $filePath = $row['cv'];
                            echo '<form action="'.$filePath.'" method="get">
                            <button type="submit" class="btn btn-success cv-open-btn">Download!</button>
                            </form>';
                            
                        }
                            
                            else echo '<button class="btn btn-success cv-open-btn disabled">Download</button>';
                        
                        ?>  
                    </div>
                </div>
                
              <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                  <form action="includes/upload.php" class="form-group custom-cv" method="POST">
                     <div class="row">
                        
                        <?php
                         if($row['customcv']!= NULL) {
                             echo '<div class="col-md-12">
                            <p class="text-center">File Exists</p>
                            </div>';
                         }
                         
                         else {
                             echo ' <div class="col-md-12">
                            <p class="text-center">File Doesn\'t Exist. Please Create a new One!!</p>
                            </div>';
                         }
                         
                        
                         
                         ?>
                         
                         <div class="col-md-12">
                             <textarea name="edu-back" id="edu-back" rows="5" class="form-control" placeholder="Educational Background" required></textarea>
                         </div>
                     </div>
                     
                     <div class="row">
                         <div class="col-md-12">
                             <textarea name="emp-history" id="" rows="10" class="form-control" placeholder="Employment History"></textarea>
                         </div>
                     </div>
                     
                     <div class="row">
                         <div class="col-md-12">
                             <textarea name="research" id="" rows="3" class="form-control" placeholder="Research"></textarea>
                         </div>
                     </div>
                     
                     <div class="row">
                         <div class="col-md-12">
                             <textarea name="training" id="" rows="3" class="form-control" placeholder="Training"></textarea>
                         </div>
                     </div>
                     
                     <div class="row">
                         <div class="col-md-12">
                             <textarea name="award" id="" rows="3" class="form-control" placeholder="Award"></textarea>
                         </div>
                     </div>
                     
                     <div class="row">
                         <div class="col-md-12">
                             <textarea name="pro-membership" id="" rows="3" class="form-control" placeholder="Professional Membership(if any)"></textarea>
                         </div>
                     </div>
                     
                     <div class="row">
                         <div class="col-md-12">
                             <textarea name="skills" id="" rows="8" class="form-control" placeholder="Skills"></textarea>
                         </div>
                     </div>
                     
                     <div class="row justify-content-center">
                         <input type="submit" name="customSubmit" value="Save CV" class="btn btn-success">
                     </div>
                  </form>
              </div>
              
              <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                  <form action="" class="form-group info-change-form">
                      <div class="row justify-content-center input-field">
                          <div class="col-md-3">
                              <label for="email">Email:</label>
                          </div>
                          <div class="col-md-4">
                              <input type="email" name="email" class="form-control">
                          </div>
                      </div>
                      
                      <div class="row justify-content-center input-field">
                          <div class="col-md-3">
                              <label for="old-pass">Old Password:</label>
                          </div>
                          <div class="col-md-4">
                              <input type="password" class="form-control" name="old-pass">
                          </div>
                      </div>
                      
                      <div class="row justify-content-center input-field">
                          <div class="col-md-3">
                              <label for="new-pass">New Password:</label>
                          </div>
                          <div class="col-md-4">
                              <input type="password" class="form-control" name="new-pass">
                          </div>
                      </div>
                      
                      <div class="row justify-content-center input-field">
                          <div class="col-md-3">
                              <label for="confirm-new-pass">Confirm Password:</label>
                          </div>
                          <div class="col-md-4">
                              <input type="password" class="form-control" name="confirm-new-pass">
                          </div>
                      </div>
                      
                      <div class="row justify-content-center">
                      <input type="submit" class="btn btn-success" value="Change Password">
                      </div>
                  </form>
              </div>
            </div>
          </div>
        </div>
        
    </div>
    
    
    <?php include 'includes/footer.php'; ?>
    <style>
    <?php include 'css/footer.css'; ?>
    </style>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>