<?php

if(!isset($_SESSION)){
    session_start();
}

if(isset($_SESSION['email'])){
    header("Location: ../mainpage.php");
    exit();
}

include 'database.php';

$firstName = '';
$lastName = '';
$email = '';
$password = '';
$confirmPassword = '';
$passwordMin = 6;

function clean_text($string){
    $string = trim($string);
    $string = stripslashes($string);
    $string = htmlspecialchars($string);
    return $string;
}

if(isset($_POST['submit'])){
    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm-password'];
    
    if(empty($firstName)){
        header("Location: ../signup.php?firstname");
        exit();
    } else{
        $firstName = clean_text($_POST['first-name']);
        if(!preg_match("/^[a-zA-Z ]*$/", $firstName)){
            header("Location: ../signup.php?firstnamechar");
            exit();
        }
    }
    
    if(empty($lastName)){
        header("Location: ../signup.php?lastname");
        exit();
    }else{
        $lastName = clean_text($_POST['last-name']);
        if(!preg_match("/^[a-zA-Z ]*$/", $lastName)){
            header("Location: ../signup.php?lastnamechar");
            exit();
        }
    }
    
    if(empty($email)){
        header("Location: ../signup.php?email");
        exit();
    } else{
        $email = clean_text($_POST['email']);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            header("Location: ../signup.php?invalidemail");
            exit();
        }
        $sql = "SELECT * FROM user WHERE email = '".$email."'";
        $result = mysqli_query($connection, $sql);
        if(mysqli_num_rows($result) >= 1){
            header("Location: ../signup.php?userexists");
            exit();
        }
    }
    
    if(empty($password)){
        header("Location: ../signup.php?password");
        exit();
    } else{
        if(strlen($password) < $passwordMin){
            header("Location: ../signup.php?shortpassword");
            exit();
        }
    }
    
    if(empty($confirmPassword)){
        header("Location: ../signup.php?password");
        exit();
    } else {
        if($password != $confirmPassword){
            header("Location: ../signup.php?passwordmismatch");
            exit();
        }
    }
    
    $password = md5($password);
    
    $query = "INSERT INTO user(email, password) ";
    $query .= "VALUES ('$email', '$password');";
    mysqli_query($connection, $query);
    

    
    $query = "SELECT * FROM user ORDER BY id DESC LIMIT 1";
    $result = mysqli_query($connection, $query);
    
    if(!$result){
        echo mysqli_error($connection);
    }
    
    $row = mysqli_fetch_assoc($result);
    
    $_SESSION['name'] = $firstName . " " . $lastName;
    $_SESSION['email'] = $email;
    $_SESSION['id'] = $row['id'];
    $userid = $row['id'];
    
    $query = "INSERT INTO user_info(userid, firstName, lastName) ";
    $query .= "VALUES ($userid ,'$firstName', '$lastName');";
    $result = mysqli_query($connection, $query);
    
    
    header("Location: ../mainpage.php");
    exit();
}


?>

