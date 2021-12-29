<?php
session_start();
$user_type=$_GET['user_type'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Login to Admin Panel | School of Engineering | Tezpur University</title>
    <link rel="shortcut icon" href="../Images/favicon.ico" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
    <style>
.btn-color{
  background-color: #0e1c36;
  color: #fff;
  
}

.profile-image-pic{
  height: 200px;
  width: 200px;
  object-fit: cover;
}



.cardbody-color{
  background-color: #ebf2fa;
}

a{
  text-decoration: none;
}
body{

    background: #4B79A1;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #283E51, #4B79A1);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #283E51, #4B79A1); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */  
  
}
        </style>
</head>
<body class="img-fluid">
    
<div class="container">
    <div class="row">
      <div class="col-md-6 text-center offset-md-3">
        <h2 class="text-center text-dark mt-5">Login Here</h2>
        <div class="text-center mb-5 text-dark"><?php echo $user_type  ?></div>
        <div class="card my-5"  style="border-radious:15px;background-color: #ffffff;opacity:.7;">

          <form method="post" action="" class="card-body p-lg-5">

            <div class="text-center">
              <img src="../Images/Tezpur-University.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                width="200px" alt="profile">
            </div>

            <div class="mb-3">
              <input type="text" class="form-control" maxlength="40" name="username" id="Username" aria-describedby="emailHelp"
                placeholder="User Name">
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" maxlength="40" name="password" id="password" placeholder="password">
            </div>
            <div class="text-center"><button type="submit" name="login" class="btn btn-color px-5 mb-5 w-100">Login</button></div>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
  <script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  
        </script>
</body>
</html>
<?php
    include_once('connection.php');
    if(isset($_POST['login']))
    {
      if($user_type=="Super Admin"){
$user_name=mysqli_real_escape_string($connection,$_POST['username']);
        $user_pass=mysqli_real_escape_string($connection,$_POST['password']);
        md5($user_pass);
        $login_query="select * from user where user_name='$user_name' AND password='$user_pass' AND user_type='$user_type' "; 
    $run=mysqli_query($connection,$login_query);
    if(mysqli_num_rows($run)>0)
    {
      // super admin 
           $_SESSION['SuperAdmin']='true';
header('Location:index.php');
        }
        else
        {
            echo "<script>alert('Incorrect User Name or Password')</script>";
           
        }
      }
        // end of super admin 

          // admin 
      if($user_type=="Admin"){
        $user_name=mysqli_real_escape_string($connection,$_POST['username']);
        $user_pass=mysqli_real_escape_string($connection,$_POST['password']);
        md5($user_pass);
        $login_query="select * from user where user_name='$user_name' AND password='$user_pass' AND user_type='$user_type' "; 
    $run=mysqli_query($connection,$login_query);
    if(mysqli_num_rows($run)>0)
    {
           $_SESSION['Admin']='true';
header('Location:admin_work/index.php');
        }
        else
        {
            echo "<script>alert('Incorrect User Name or Password')</script>";
           
        }
      }
        // end of admin 
    }
    ?>
</html>
