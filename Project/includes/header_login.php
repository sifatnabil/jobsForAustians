
<?php 
if(!isset($_SESSION)) session_start();



if(isset($_POST['logout'])){
    $_SESSION = array();
    header("Location: ../mainpage.php");
    session_destroy();
    exit();
}
?>
   
   <div id="myNav">
        <nav class="navbar navbar-expand-lg my-navbar">
            <div class="container">
              <a class="navbar-brand text-white site-name" href="#">JFA</a>
              <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link text-white" href="mainpage.php">
                    <i class="fas fa-home"></i>
                    Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="jobs.php">
                    <i class="fas fa-briefcase"></i>
                    Jobs</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="contactpage.php">
                    <i class="far fa-envelope"></i>
                    Contact Us</a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link text-white" href="profile.php">
                    <i class="fas fa-user-alt"></i>
                    Profile</a>
                  </li>
                  
                  
                  </ul>
                
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                    <!-- Example single danger button -->
                    <div class="btn-group">
                      <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo $_SESSION['name']; ?>
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="profile.php">Profile</a>
                        <div class="dropdown-divider"></div>
                        <form action="includes/header_login.php" method="post">
<!--                            <a class="dropdown-item" type="submit" name="logout" href="#">Log Out</a>-->
                            <input class="dropdown-item" type="submit" name="logout" value="Sign Out">
                        </form>
                      </div>
                    </div>
                  </li>    
                </ul>
                
              </div>
            </div>
        </nav>
    </div>