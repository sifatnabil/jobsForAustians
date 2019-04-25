<?php

if(!isset($_SESSION)) session_start();

include 'database.php';

$userID = $_SESSION['id'];

$query = "SELECT * FROM user_info WHERE userid = $userID;";

$result = mysqli_query($connection, $query);

if(!$result) die(mysqli_error($connection));

$row = mysqli_fetch_assoc($result);

$firstName = $row['firstName'];
$lastName = $row['lastName'];
$email = $_SESSION['email'];
$sqlDate = $row['dob'];
$dob = strtotime($sqlDate);
$address = $row['address'];
$phone = $row['phone'];


if(isset($_POST['submit'])){
    $firstName = mysqli_real_escape_string($connection, $_POST['first-name']);
    $lastName = mysqli_real_escape_string($connection, $_POST['last-name']);
    $dob = date('Y-m-d', strtotime($_POST['dob']));
    $address = mysqli_real_escape_string($connection, $_POST['address']);
    $phone = mysqli_real_escape_string($connection, $_POST['phone']);
    
    $userID = $_SESSION['id'];
    
    $query = "UPDATE user_info SET firstName = '$firstName', lastName = '$lastName', dob = '$dob', address = '$address', phone = $phone WHERE userid = $userID";
    
    mysqli_query($connection, $query) or die(mysqli_error($connection));
    
    header("Location: ../profile.php");
    exit();
    
}

?>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Personal Info</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="includes/personalinfo.php" method="post" class="form-group">
      <div class="modal-body">
        
            <div>
                <label for="first-name">First Name</label>
                <input type="text" name="first-name" class="form-control" value="<?php echo $firstName; ?>" required>
            </div>
            <div>
                <label for="last-name">Last Name</label>
                <input type="text" name="last-name" class="form-control" value="<?php echo $lastName; ?>" required>
            </div>
            
            <div>
                <label for="dob">Date of Birth</label>
                <input type="date" name="dob" class="form-control" value="<?php echo date("Y-m-d",$dob); ?>">
            </div>
            
            <div>
                <label for="address">Address</label>
                <input type="text" name="address" class="form-control" value="<?php echo $address;  ?>">
            </div>
            
            <div>
                <label for="phone">Phone</label>
                <input type="tel" pattern="[0-9]*" name="phone" class="form-control" value="<?php echo $phone; ?>">
            </div>
            
            
      </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         <input type="submit" class="btn btn-success" name="submit" value="Save Changes">
      </div>
        </form>
    </div>
  </div>
</div>