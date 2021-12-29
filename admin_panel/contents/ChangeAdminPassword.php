<?php
 if(!isset($_SESSION['SuperAdmin'])&&$_SEESION['SuperAdmin']!='true')
 {
  echo "<script>window.location.replace('../Login.php?user_type=Super Admin');</script>";
     exit();
 }
 else
 { ?>
 <div id="content" class="p-4 p-md-5 pt-5">
        <h4 class="mb-4">Change Admin Password:</h4>
        <form method="post" action="">
        <div class="mb-3">
      <label for="exampleInput1" class="form-label">*Enter Super Admin Password</label>
      <input type="password" name="super_pass" class="form-control" id="exampleInput1" maxlength="40" required>
    </div>
    <div class="mb-3">
      <label for="exampleInput2" class="form-label">*Enter new password for Admin</label>
      <input type="password" name="admin_pass" class="form-control" id="exampleInput2" maxlength="40" required>
    </div>
    <div class="mb-3">
      <label for="exampleInput3" class="form-label">*Enter new password again for Amdin</label>
      <input type="text" name="admin_pass2" class="form-control" id="exampleInput3" maxlength="40" required>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    
                </form>
      </div>

      <?php
    if(isset($_POST['submit']))
    {
          $super_pass=mysqli_real_escape_string($connection,$_POST['super_pass']);
          $new_pass=mysqli_real_escape_string($connection,$_POST['admin_pass']);
          $new_pass2=mysqli_real_escape_string($connection,$_POST['admin_pass2']);
         if(empty($super_pass)){
    echo "<script>alert('Please enter Super Amdin password')</script>";
         }
         if($new_pass!=$new_pass2){
        echo "<script>alert('New Password did not match, Try Again')</script>";
        exit();
    }
        $query="select * from user where password='$super_pass' AND user_type='Super Admin'";
$run=mysqli_query($connection,$query);
         if(mysqli_num_rows($run)>0)
    {
     $query="update user set password='$new_pass' where user_type='Admin'"; 
$run=mysqli_query($connection,$query);
      if($run) 
      {
           echo "<script>alert('Password has been changed successfully for Amdin Panel.')</script>";
   echo "<script>window.location.assign('index.php')</script>";
      }
    else
    {
      echo "<script>alert('Something went wrong, Please Try Again.')</script>";  
    }
   
      }
        else
    {
      echo "<script>alert('Current password is not valid..')</script>";  
    }
         }
        }
?>
