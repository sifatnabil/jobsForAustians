<?php

include 'includes/database.php';

define('KB', 1024);
define('MB', 1048576);


if(isset($_POST['submit1'])){
    $file = $_FILES['file'];
    
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileType = $_FILES['file']['type'];
    $fileError = $_FILES['file']['error'];
    $fileSize = $_FILES['file']['size'];
    
    $fileExtension = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExtension));
    
    $allowed = array('jpg', 'jpeg', 'pngSSSS');
    
    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 10 * MB){
                $fileNewName = 'slider1'.'.'.$fileActualExt;
                $fileDestination = 'uploads/'.$fileNewName;
                
                move_uploaded_file($fileTmpName, $fileDestination);
                
                $query = "UPDATE slider SET slider1 = '$fileDestination' WHERE id = 1";
                
                mysqli_query($connection, $query);
                
                header("Location: admin.php?successful");
            }
        }
    }
}

else if(isset($_POST['submit2'])){
    $file = $_FILES['file'];
    
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileType = $_FILES['file']['type'];
    $fileError = $_FILES['file']['error'];
    $fileSize = $_FILES['file']['size'];
    
    $fileExtension = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExtension));
    
    $allowed = array('jpg', 'jpeg', 'pngSSSS');
    
    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 10 * MB){
                $fileNewName = 'slider2'.'.'.$fileActualExt;
                $fileDestination = 'uploads/'.$fileNewName;
                
                move_uploaded_file($fileTmpName, $fileDestination);
                
                $query = "UPDATE slider SET slider2 = '$fileDestination' WHERE id = 1";
                
                mysqli_query($connection, $query);
                
                header("Location: admin.php?successful");
            }
        }
    }
}

else if(isset($_POST['submit3'])){
    $file = $_FILES['file'];
    
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileType = $_FILES['file']['type'];
    $fileError = $_FILES['file']['error'];
    $fileSize = $_FILES['file']['size'];
    
    $fileExtension = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExtension));
    
    $allowed = array('jpg', 'jpeg', 'pngSSSS');
    
    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 10 * MB){
                $fileNewName = 'slider3'.'.'.$fileActualExt;
                $fileDestination = 'uploads/'.$fileNewName;
                
                move_uploaded_file($fileTmpName, $fileDestination);
                
                $query = "UPDATE slider SET slider3 = '$fileDestination' WHERE id = 1";
                
                mysqli_query($connection, $query);
                
                header("Location: admin.php?successful");
            }
        }
    }
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

    <title>Admin Panel</title>
  </head>
  <body>
   
       <div class="container">
           <form action="admin.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Choose Slides</label>
                <input type="file" name="file" class="form-control">
            </div>
            
            <input type="submit" class="btn btn-success" name="submit1" value="Set Slide 1">
            <input type="submit" class="btn btn-success" name="submit2" value="Set Slide 2">
            <input type="submit" class="btn btn-success" name="submit3" value="Set Slide 3">
        </form>
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>