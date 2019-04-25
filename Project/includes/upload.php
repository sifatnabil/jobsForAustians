<?php

if(!isset($_SESSION)) session_start();

define('KB', 1024);
define('MB', 1048576);

include_once("database.php");

if(isset($_POST['submit'])){
    $file = $_FILES['file'];
    
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileType = $_FILES['file']['type'];
    $fileError = $_FILES['file']['error'];
    $fileSize = $_FILES['file']['size'];
    
    $fileExtension = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExtension));
    
    $allowed = array('pdf', 'doc', 'docx');
    
    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 5*MB){
                $id = $_SESSION['id'];
                $fileNewName = $id.".". $fileActualExt;
                $fileDestination = '../uploads/'.$fileNewName;
                
                move_uploaded_file($fileTmpName, $fileDestination);
                
                $fileDestination = 'uploads/'.$fileNewName;
                
                $sql = "UPDATE user_info SET cv='$fileDestination' WHERE userid = '$id'";
                
                $result = mysqli_query($connection, $sql);
                
                if(!$result) mysqli_error($connection) . die();
                
                header("Location: ../profile.php?uploadsuccess");
            } else header("Location: ../profile.php?sizetoobig");
        } else header("Location: ../profile.php?error");
    } else header("Location: ../profile.php?invalidtype");
}

if(isset($_POST['customSubmit'])){
    $id = $_SESSION['id'];
    $file = '../uploads/' . $id . '.txt';
    $handle = fopen($file, 'w+') or die('Can not open file: ' . $file);
    
    $eduBack = 'Educational Background: '. PHP_EOL . $_POST['edu-back'] . PHP_EOL;
    $empHis = 'Employment History: ' . PHP_EOL . $_POST['emp-history'];
    $research = 'Research: ' . PHP_EOL . $_POST['research'] . PHP_EOL;
    $training = 'Training: ' .PHP_EOL . $_POST['training'] . PHP_EOL;
    $award = 'Award: ' . PHP_EOL . $_POST['award'] .PHP_EOL;
    $proMember = 'Professional Membership: ' . PHP_EOL . $_POST['pro-membership'] . PHP_EOL;
    $skills = 'Skills: ' . PHP_EOL . $_POST['skills'] . PHP_EOL;
    
    
    fwrite($handle, $eduBack);
    fwrite($handle, $empHis);
    fwrite($handle, $research);
    fwrite($handle, $training);
    fwrite($handle, $award);
    fwrite($handle, $proMember);
    fwrite($handle, $skills);
    
    $fileDestination = 'uploads/'. $id . "." . "txt"; 
    $sql = "UPDATE user_info SET customcv = '$fileDestination' WHERE userid = '$id'";
    
    mysqli_query($connection, $sql);
    
    fclose($file);
    
    $eduBack = '';
    $empHis = '';
    $research = '';
    $training = '';
    $award = '';
    $proMember = '';
    $skills = '';
    
    header("Location: ../profile.php?filesavesuccess");
}


?>