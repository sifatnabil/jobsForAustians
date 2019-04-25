<?php

if(!isset($_SESSION)) session_start();



if(isset($_SESSION['email'])){
    header("Location: ../mainpage.php");
}

include 'database.php';

$email = '';
$password = '';

function clean_text($string){
    $string = trim($string);
    $string = stripslashes($string);
    $string = htmlspecialchars($string);
    return $string;
}

if(isset($_POST['submit'])){

    $email = $_POST['email'];
    $password = $_POST['password'];
    if(empty($email) || empty($password)){
        header("Location: ../signin.php?emptyfield");
        exit();
    }

    $email = clean_text($email);
    $password = md5($password);

    $query = "SELECT * FROM user";
    $result = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($result)){
        if($row['email'] == $email){
            if($row['password'] == $password){
                $_SESSION['id'] = $row['id'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['password'] = $row['password'];
                $userID = $row['id'];
                
                $query = "SELECT firstName, lastName FROM user_info where userid = $userID;";
                $result = mysqli_query($connection, $query);
                
                $row = mysqli_fetch_assoc($result);
                $_SESSION['name'] = $row['firstName'] . " " . $row['lastName'];
                
                header("Location: ../mainpage.php?status=new");
                exit();
            }else{
                header("Location: ../signin.php?wrongpassword");
                exit();
            }
        }
    }
    
    header("Location: ../signin.php?nouser");
    
}

?>