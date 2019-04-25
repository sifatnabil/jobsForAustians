<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,700" rel="stylesheet"> 
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/postjob.css">

    <title>Post a Job</title>
  </head>
  <body>
  <div>
     <div>
      <div class="container">
        <form action="includes/jobpost_validate.php" method="post" class="form-group job-form">
           <div class="background"></div>
            <div class="row justify-content-center">
                <div class="col-md-5">
                   <label for="company-name">Company Name</label>
                    <input type="text" name="company-name" class="form-control" required>
                </div>
            </div>
            
            
            <div class="row">
                <div class="col-md-6 col-sm-12">
                   <label for="job-context">Job Context</label>
                    <textarea name="job-context" rows="10" class="form-control" required></textarea>
                </div>
                
                <div class="col-md-6 col-sm-12">
                   <label for="job-responsibilities">Job Responsibilities</label>
                    <textarea name="job-responsibilities" rows="10" class="form-control" required></textarea>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6 col-sm-12">
                   <label for="edu-req">Educational Requirement</label>
                    <textarea name="edu-req" rows="10" class="form-control" required></textarea>
                </div>
                
                <div class="col-md-6 col-sm-12">
                   <label for="add-req">Additional Requirements</label>
                    <textarea name="add-req" rows="10" class="form-control" required></textarea>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6 col-sm-12">
                   <label for="">Employment Status: </label><br>
                    <input type="radio" name="emp-status" value="Full Time" checked> Full Time
                    <input type="radio" name="emp-status" value="Part Time"> Part Time
                    <input type="radio" name="emp-status" value="Internship"> Internship
                </div>
                <div class="col-md-6 col-sm-12">
                   <label for="salary">Salary</label>
                    <input name="salary" type="text" class="form-control" required>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <label for="experience">Experience Required</label>
                    <textarea name="experience" rows="10" class="form-control" required></textarea>
                </div>
                
                <div class="col-md-6 col-sm-12">
                    <label for="add-Ben">Additional Benefits</label>
                    <textarea name="add-Ben" rows="10" class="form-control" required></textarea>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6 col-sm-11">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" name="address" required>
                </div>
                
                <div class="col-md-6 col-sm-12">
                    <label for="map-add">iframe Link</label>
                    <input type="text" class="form-control" name="map-add">
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6 col-sm-12">
                   <label for="instruction">Email and Instruction</label>
                    <textarea name="instruction" rows="5" class="form-control" required></textarea>    
                </div>
                
                <div class="col-md-6 col-sm-12 align-self-center">
                    <label for="expire-date">Expiration Date</label>
                    <input type="date" name="expire-date" value="<?php echo date('Y-m-d'); ?>" class="form-control" required>
                </div>
            </div>
            
            <div class="row justify-content-center">
                <input type="submit" name="submit" value="Post Job" class="submit-button btn btn-success">
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