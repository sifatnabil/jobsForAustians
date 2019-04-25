<?php 
if(!isset($_SESSION)) session_start();
include 'includes/database.php';
$sql = 'SELECT * FROM slider';
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    
    <!-- Google Fonts   -->
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,700" rel="stylesheet">
    
    <!-- Custom CSS   -->
    <link rel="stylesheet" href="css/mainpage.css">

    <title>Home Page</title>
  </head>
  <body>
  <body>
   
   
    <?php include 'includes/header_check.php'; ?>
    <style><?php include 'css/header.css'; ?></style>
    
   <div >
       <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="<?php echo $row['slider1'] ?>" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <h2 class="site-name">jobsForAustians</h2>
            <p>Find the job that's right for you</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?php echo $row['slider2'] ?>"lt="Second slide">
          <div class="carousel-caption d-none d-md-block caption">
            <h2 class="site-name">jobsForAustians</h2>
            <p>Hire the right people.<br>Find them here.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?php echo $row['slider3'] ?>"lt="Third slide">
          <div class="carousel-caption d-none d-md-block">
            <h2 class="site-name">jobsForAustians</h2>
            <p>Alone we can do so little.<br>Together we can do so much.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
   </div>
   
   <div class="empty-div"></div>
         <div class="body-part1">
             
         
          <div class="container">
           <div class="row row-eq-height">
               <div class="col-md-4 col-lg-4 col-sm-12 box">
                   <h1><p style="font-family: 'Oleo Script', cursive;">Our Goal</p></h1>
                   <p class="body-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora magnam voluptatem numquam sunt odit harum neque incidunt culpa doloremque non ratione ducimus, fuga ipsa consequatur ullam sint ipsam porro. Molestias.</p>  
                   <form action="signup.php">
                       <input type="submit" value="Sign Up" class="btn btn-success btn-block signup-btn site-name">
                   </form>
                   
               </div>
               <div class="col-md-8 col-lg-8 col-sm-12 box">
                   <img class="img-fluid img-thumbnail" src="image/employment-recruiters-assist-in-getting-jobs.jpg" alt="">
                </div>
           </div>
             </div>
          </div>
           <div class="container">
           <div class="row row-eq-height">
               <div class="col-md-8 col-lg-8 col-sm-12 image box">
                  <img src="image/angry-annoyed-cafe-52608.jpg" class="img-fluid img-thumbnail">
                </div>
               <div class="col-md-4 col-lg-4 col-sm-12 box">
                   <h1><p style="font-family: 'Oleo Script', cursive;">Choose Your Dream job</p></h1>
                   <p class="body-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia at consequuntur dolorum mollitia fuga iure amet id distinctio in fugiat voluptas exercitationem cupiditate sequi aliquid iusto, tempora, accusamus esse, magni!</p>
                   
                   <a href="jobs.php" class="btn btn-success btn-block site-name">Search Jobs</a>
               </div>
           </div>
       </div>
           
        <div class="body-part1 inspire-text-back">
            <div class="row row-eq-height">
               <div class="col-md-5 col-sm-1">
                   <img src="image/adult-bar-brainstorming-1015568.jpg" class="img-fluid" alt="">
               </div>
               
               <div class="col-md-7 col-sm-1 inspire-text">
                   <p>"Choose a job you love, and you will never have to work a day in your life"</p>
               </div>
            </div>
            

        </div>
        
        <!-- modal goes here-->
        <?php include 'includes/jobmodal.php' ?>
        <style>
            <?php include 'css/jobmodal.css' ?>
        </style>
       
        <!--footer-->
        <?php include 'includes/footer.php'; ?>
        <style>
        <?php include 'css/footer.css'; ?>
        </style>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    
    
  </body>
</html>
