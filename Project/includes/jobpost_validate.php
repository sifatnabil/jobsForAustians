<?php

include 'database.php';

$companyName = '';
$jobContext = '';
$jobResponsibilities = '';
$eduReq = '';
$addReq = '';
$empStat = '';
$salary = '';
$experience = '';
$addBen = '';
$address = '';
$mapAdd = '';
$instruction = '';
$expireDate = '';

function clean_text($string){
    $string = trim($string);
    $string = stripslashes($string);
    $string = htmlspecialchars($string);
    return $string;
}

if(isset($_POST['submit'])){

    
    $companyName = mysqli_real_escape_string($connection, $_POST['company-name']);
    $jobContext = mysqli_real_escape_string($connection, $_POST['job-context']);
    $jobResponsibilities = mysqli_real_escape_string($connection, $_POST['job-responsibilities']);
    $eduReq = mysqli_real_escape_string($connection, $_POST['edu-req']);
    $addReq = mysqli_real_escape_string($connection, $_POST['add-req']);
    $empStat = mysqli_real_escape_string($connection, $_POST['emp-status']);
    $salary = mysqli_real_escape_string($connection, $_POST['salary']);
    $experience = mysqli_real_escape_string($connection, $_POST['experience']);
    $addBen = mysqli_real_escape_string($connection, $_POST['add-ben']);
    $address = mysqli_real_escape_string($connection, $_POST['address']);
    $mapAdd = mysqli_real_escape_string($connection, $_POST['map-add']);
    $instruction = mysqli_real_escape_string($connection, $_POST['instruction']);
    $expireDate = date('Y-m-d', strtotime($_POST['expire-date']));


    $query = "INSERT INTO job (companyName, jobContext, jobRes, eduReq, addReq, empStat, salary, experience, addBen, address, mapAdd, instruction, expireDate) ";
    $query .= "VALUES ('$companyName','$jobContext','$jobResponsibilities','$eduReq','$addReq', '$empStat','$salary', '$experience', '$addBen','$address', '$mapAdd','$instruction','$expireDate')";

    $result = mysqli_query($connection, $query);
    
    if(!$result){
        echo mysqli_error($connection);
        exit();
    }

    header("Location: ../mainpage.php?jobPost=success");
    exit();
    
}

?>