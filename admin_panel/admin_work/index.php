<?php
 session_start();
 if(!isset($_SESSION['Admin'])&&$_SEESION['Admin']!='true')
 {
  echo "<script>window.location.replace('../Login.php?user_type=Admin');</script>";
     exit();
 }
 else
 {
    include_once('../connection.php');
    ?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Admin Panel | School of Engineering | Tezpur University</title>
    <link rel="shortcut icon" href="../../Images/favicon.ico" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
		<?php
    include_once('./contents/SideBar.php');
    
    if(!isset($_GET['UploadNewMaterial'])){
    if(!isset($_GET['UploadNewPaper'])){
    if(!isset($_GET['ViewUploadedMaterial'])){
    if(!isset($_GET['ViewUploadedPapers'])){
    
    include_once('./contents/Home.php');
    }}}}

   
      if(isset($_GET['UploadNewMaterial'])){
        include_once('./contents/UploadNewMaterial.php');
      }
      if(isset($_GET['UploadNewPaper'])){
        include_once('./contents/UploadNewPaper.php');
      }
      if(isset($_GET['ViewUploadedMaterial'])){
        include_once('./contents/ViewUploadedMaterial.php');
      }
      if(isset($_GET['ViewUploadedPapers'])){
        include_once('./contents/ViewUploadedPapers.php');
      }
     

    ?>

        <!---copyright---->
  <div class="container-fluid copyright">
        <div class="row">
            <p>© 2021 School Of Engineering, All Rights Reserved. Developed by <span><a target="_blank"
                        href="https://sonumittal.github.io/" style="text-decoration:none" />Sonu Mittal</a></span> &
                Rishav Mittal</p>
        </div>
    </div>
    <!----end of copyright---->
		</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
  </body>
</html>
   <?php } ?>