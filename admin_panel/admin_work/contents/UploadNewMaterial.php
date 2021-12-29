<?php
 if(!isset($_SESSION['Admin'])&&$_SEESION['Admin']!='true')
 {
    echo "<script>window.location.replace('../../Login.php?user_type=Admin');</script>";
     exit();
 }
 else
 { ?>
<div id="content" class="p-4 p-md-5 pt-5">
  <h2 class="mb-4">Upload New Material</h2>

  <form action="" method="POST">
    <div class="mb-3">
      <select class="form-select" name="SubjectCourse" aria-label="Default select example" required>
        <option value="Common Course">*Select Course for uploading new material</option>
        <option value="MCA">MCA</option>
        <option value="M.Tech (CSE)">M.Tech (CSE)</option>
        <option value="M.Tech (IT)">M.Tech (IT)</option>
        <option value="PHD">PHD</option>
        <option value="B.Tech">B.Tech</option>
      </select>
    </div>
    <div class="mb-3">
      <button type="submit" name="submit1" class="btn btn-primary">Find All Data</button>
    </div>
  </form>
  <!-- 2nd form -->
  <?php
if(isset($_POST['submit1']) and $_POST['SubjectCourse']!='Common Course'){ 
     $SubjectCourse=$_POST['SubjectCourse']; ?>
<div class="mb-3">
    <h5>*Select Subject:</h5>
</div>
<form method="post" action="" enctype="multipart/form-data">
    
    <div class="mb-3">
        <select class="form-select" name="SubjectType" aria-label="Default select example" id="select1" onchange="myFunction()" required>
            <option>*Select Subject Type</option>
            <option value="Core">Core</option>
            <option value="Elective">Elective</option>
            <option value="Open-Elective">Open-Elective</option>
        </select>
    </div>
    <div class="mb-3">
        <select class="form-select" name="Core" id="select2" style="display: none;">
            <option>Select Core Subject</option>
            <?php
  $SubjectType="Core";
$query="select * from subjects where subject_course_name='$SubjectCourse' and subject_type='$SubjectType' order by id desc";
$row=mysqli_query($connection,$query);
while($result=mysqli_fetch_array($row))
{
    echo "<option value='".$result['1']."'>".$result['1']."</option>";
        
}?>
        </select>
    </div>
    <div class="mb-3">
        <select class="form-select" name="Elective" id="select3"
            style="display: none;">
            <option>Select Elective Subject</option>
            <?php
  
  $SubjectType="Elective";
$query="select * from subjects where subject_type='$SubjectType' order by id desc";
$row=mysqli_query($connection,$query);
while($result=mysqli_fetch_array($row))
{
    echo "<option value='".$result['1']."'>".$result['1']."</option>";
        
}?>
        </select>
    </div>
    <div class="mb-3">
        <select class="form-select" name="Open-Elective" id="select4" style="display: none;">
            <option>Select Open-Elective subject</option>
            <?php
  $SubjectType="Open-Elective";
$query="select * from subjects where subject_type='$SubjectType' order by id desc";
$row=mysqli_query($connection,$query);
        
while($result=mysqli_fetch_array($row))
{
    echo "<option value='".$result['1']."'>".$result['1']."</option>";    
}?>
        </select>
    </div>
  <input type="hidden" class="form-control" value="<?php echo $SubjectCourse ?>" name="SubjectCourse" id="exampleInputText1" maxlength="100" required>
    
    <div class="mb-3">
        <label for="exampleInputText" class="form-label">Material Title</label>
        <input type="text" class="form-control" name="MaterialTitle" id="exampleInputText" maxlength="100" required>
    </div>
    <div class="mb-3">
        <label for="exampleInputText2"  class="form-label">Teacher Name</label>
        <input type="text" class="form-control" name="TeacherName" id="exampleInputText2" maxlength="40" required>
    </div>
    <div class="mb-3">
        <label for="formFile" class="form-label">Upload Material <span class="text-danger">(File size must be less than 5Mb with jpg/jpeg/png/pdf/docx/pptx/xlsx format only)</span></label>
        <input class="form-control" name="file" type="file" id="formFile" required>
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
        <label class="form-check-label" for="exampleCheck1">*I hereby declare that the details furnished above are true
            and correct to the best of my knowledge and belief. In case any of the above information is found to be
            false
            or
            untrue or misleading or misrepresenting, I am
            aware that I may be held liable for it.</label>
    </div>
    <button type="submit" name="submit2" class="btn btn-primary">Upload</button>
</form>
<script>
    function myFunction() {
        var x = document.getElementById("select1").value;
        if (x == "Core") document.getElementById("select2").style.display = "block";
        else document.getElementById("select2").style.display = "none";
        if (x == "Elective") document.getElementById("select3").style.display = "block";
        else document.getElementById("select3").style.display = "none";
        if (x == "Open-Elective") document.getElementById("select4").style.display = "block";
        else document.getElementById("select4").style.display = "none";
    }
</script>
<?php  }  ?>
<!-- end of 2nd form -->
<!-- php code for sending data to DB -->
<?php 
if(isset($_POST['submit2'])){
$f_name = $_FILES['file']['name'];
$f_tmp = $_FILES['file']['tmp_name'];
 $f_size = $_FILES['file']['size'];
$f_extension = explode('.',$f_name);
$f_extension = strtolower(end($f_extension));
   $f_newfile = uniqid().'.'.$f_extension;
    $store = "../uploaded_files/material/".$f_newfile;
if($f_extension=='jpg'||$f_extension=='jpeg'||$f_extension=='png'||$f_extension=='pdf'||$f_extension=='docx'||$f_extension=='pptx'||$f_extension=='xlsx'){
 if($f_size>5000000){
     echo "<script>alert('Material size must be less than 5MB')</script>";
 }   
    else
    {
 if(move_uploaded_file($f_tmp,$store)){
   
    $SubjectType = mysqli_real_escape_string($connection,$_POST['SubjectType']);
    if($SubjectType == "Core"){
        $SubjectCourseName = mysqli_real_escape_string($connection,$_POST['SubjectCourse']);
    }
    else{
        $SubjectCourseName ="Common Course";
    }
     $MaterialTitle = mysqli_real_escape_string($connection,$_POST['MaterialTitle']);
     $TeacherName = mysqli_real_escape_string($connection,$_POST['TeacherName']);
     if(isset($_POST['Core']) and $SubjectType=='Core'){
        $SubjectName = mysqli_real_escape_string($connection,$_POST['Core']);
     }
     if(isset($_POST['Elective']) and $SubjectType=='Elective'){
        $SubjectName = mysqli_real_escape_string($connection,$_POST['Elective']);
     }
     if(isset($_POST['Open-Elective']) and $SubjectType=='Open-Elective'){
        $SubjectName = mysqli_real_escape_string($connection,$_POST['Open-Elective']);
     }
$query="insert into study_material VALUES (null,'$MaterialTitle','$TeacherName','$SubjectName','$SubjectCourseName','$SubjectType','$f_newfile',NOW())";
if(mysqli_query($connection,$query)) 
{
echo "<script>alert('New Material has been added successfully.')</script>";
}
     else{
         echo "<script>alert('Something went wrong, Please check material format or size.')</script>";
     }
    }
        else{
         echo "<script>alert('Something went wrong with your file, Please check material format or size.')</script>";
     }
}
}
 else
    {
     echo "<script>alert('Invalid file format, Material must be uploaded with jpg/jpeg/png/pdf/docx/pptx/xlsx format only')</script>";  
    }
         

}
    
?>
</div>
<?php } ?>

