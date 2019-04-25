<?php

if(!isset($_SESSION)) session_start();

include_once 'database.php';

$query = "SELECT * FROM JOB";
$result = mysqli_query($connection, $query);

if(!$result) {
    echo mysqli_error($connection);
    die();
}

$string = '';
$jobDesc = '';

while($row = mysqli_fetch_assoc($result)){
    //
    
    $id = $row['id'];
    $string .= '<a class="nav-link" id="v-pills-'.$id.'-tab" data-toggle="pill" href="#v-pills-'.$id.'" role="tab" aria-controls="v-pills-'.$id.'" aria-selected="false">';
    $string .= $row['companyName'] . '<br>' . $row['jobContext'];
    $string .='</a>';
    

    //Job Description starts here
    
    $jobDesc .= '<div class="tab-pane fade" id="v-pills-'.$id.'" role="tabpanel" aria-labelledby="v-pills-'.$id.'-tab">';
    
    $jobDesc .= '<h4>Company Name: ' . $row['companyName'] . 
        '</h4><br>';
    
    $jobDesc .= '<h4> Job context: </h4>' . $row['jobContext'] . '<br><br>';
    
    $jobDesc .= '<h4>Job Resolution:</h1>'. $row['jobRes'] . '<br><br>';
    
    $jobDesc .= '<h4>Educational Requirements: </h4>' . $row['eduReq'] . '<br><br>';
    
    $jobDesc .= '<h4>Additional Requirement:</h4>' . $row['addReq'] . '<br><br>';
    
    $jobDesc .= '<h4>Employment Status:</h4>' . $row['empStat'] . '<br><br>';
    
    $jobDesc .= '<h4>Experience:</h4>' . $row['experience'] . '<br><br>';
    
    if(isset($_SESSION['email'])){
        $jobDesc .= '<h4>Salary:</h4>' . $row['salary'] . '<br><br>';
    
        $jobDesc .= '<h4>Additional Benefits:</h4>' . $row['addBen'] . '<br><br>';
    }
    
    
    
    $jobDesc .= '<h4>Address:</h4>' . $row['address'] . '<br><br>';
    
    $jobDesc .= '<h4>Instructions:</h4>' . $row['instruction'] . '<br><br>';
    
    $jobDesc .= '<h4>Expire Date: </h4>' . $row['expireDate'].'<br><br>';
    
    $jobDesc .= '</div>';
    
}


?>