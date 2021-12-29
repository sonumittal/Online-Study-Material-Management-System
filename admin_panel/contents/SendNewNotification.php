<?php
 if(!isset($_SESSION['SuperAdmin'])&&$_SEESION['SuperAdmin']!='true')
 {
    echo "<script>window.location.replace('../Login.php?user_type=Super Admin');</script>";
     exit();
 }
 else
 { ?>
<div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">Send New Notification</h2>
        <form method="post" action="" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="exampleInputText" class="form-label">Notification title</label>
      <input type="text" name="title" class="form-control" id="exampleInputtext" maxlength="100" required>
    </div>
    <div class="mb-3">
  <label for="formFile" class="form-label">Uplaod File <span class="text-danger">(File size must be less than 2Mb with pdf format only)</span></label>
  <input class="form-control" name="file" type="file" id="formFile" required>
</div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
      <label class="form-check-label" for="exampleCheck1">*I hereby declare that the details furnished above are true
        and correct to the best of my knowledge and belief. In case any of the above information is found to be false or
        untrue or misleading or misrepresenting, I am
        aware that I may be held liable for it.</label>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Send</button>
</form>
      </div>
      <!-- php code -->
      <?php
if(isset($_POST['submit'])){
$f_name = $_FILES['file']['name'];
$f_tmp = $_FILES['file']['tmp_name'];
 $f_size = $_FILES['file']['size'];
$f_extension = explode('.',$f_name);
$f_extension = strtolower(end($f_extension));
   $f_newfile = uniqid().'.'.$f_extension;
    $store = "uploaded_files/notifications/".$f_newfile;
if($f_extension=='pdf'){
 if($f_size>2097152){
     echo "<script>alert('File size must be less than 2 Mb')</script>";
 }   
    else
    {
 if(move_uploaded_file($f_tmp,$store)){
     $file_title = mysqli_real_escape_string($connection,$_POST['title']);
$query="insert into notification VALUES (null,'$file_title','$f_newfile',NOW())";
if(mysqli_query($connection,$query)) //if(mysql_query($query))
{
echo "<script>alert('Notification has been sent successfully...')</script>";
}
     else{
         echo "<script>alert('Something went wrong, Please check your file format or size')</script>";
     }
    }
        else{
         echo "<script>alert('Something went wrong with your file, Please check your file format or size')</script>";
     }
}
}
 else
    {
     echo "<script>alert('Invalid file format, File must be uploaded with pdf format')</script>";  
    }
}
 }

?>
   <!-- end of php code -->