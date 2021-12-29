<?php
 if(!isset($_SESSION['SuperAdmin'])&&$_SEESION['SuperAdmin']!='true')
 {
  echo "<script>window.location.replace('../Login.php?user_type=Super Admin');</script>";
     exit();
 }
 else
 { ?> 
<div id="content" class="p-4 p-md-5 pt-5">
  <h2 class="mb-4">Upload New Paper</h2>

  <form action="" method="POST">
    <div class="mb-3">
      <select class="form-select" name="SubjectCourse" aria-label="Default select example" required>
        <option value="Common Course">*Select Course for uploading new paper</option>
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
      <select class="form-select" name="TypeofExamPaper" aria-label="Default select example" required>
        <option>*Select Type of Exam Paper</option>
        <option value="1st Test">1st Test</option>
        <option value="2nd Test (MIDTERM)">2nd Test (MIDTERM)</option>
        <option value="3rd Test">3rd Test</option>
        <option value="4th Test (ENDTERM)">4th Test (ENDTERM)</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="exampleInputNumber" class="form-label">Year of Exam Paper</label>
      <input type="number" name="YearofExamPaper" class="form-control" id="exampleInputNumber" maxlength="40" required>
    </div>
    <div class="mb-3">
  <label for="formFile" class="form-label">Uplaod Paper <span class="text-danger">(File size must be less than 5Mb with pdf format only)</span></label>
  <input class="form-control" name="file" type="file" id="formFile" required>
</div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
      <label class="form-check-label" for="exampleCheck1">*I hereby declare that the details furnished above are true
        and correct to the best of my knowledge and belief. In case any of the above information is found to be false or
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
    $store = "uploaded_files/papers/".$f_newfile;
if($f_extension=='pdf'){
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
     $TypeofExamPaper = mysqli_real_escape_string($connection,$_POST['TypeofExamPaper']);
     $YearofExamPaper = mysqli_real_escape_string($connection,$_POST['YearofExamPaper']);
     if(isset($_POST['Core']) and $SubjectType=='Core'){
        $SubjectName = mysqli_real_escape_string($connection,$_POST['Core']);
     }
     if(isset($_POST['Elective']) and $SubjectType=='Elective'){
        $SubjectName = mysqli_real_escape_string($connection,$_POST['Elective']);
     }
     if(isset($_POST['Open-Elective']) and $SubjectType=='Open-Elective'){
        $SubjectName = mysqli_real_escape_string($connection,$_POST['Open-Elective']);
     }
     // checking if paper is already in DB
$login_query="select * from exam_papers where subject_name='$SubjectName' AND subject_exam_paper_type='$TypeofExamPaper' AND subject_exam_paper_year='$YearofExamPaper' AND subject_course_name='$SubjectCourseName' AND subject_type='$SubjectType' "; 
$run=mysqli_query($connection,$login_query);
if(mysqli_num_rows($run)>0)
{
  echo "<script>alert('This Paper with your provided details is already available. Please first delete that exsting paper then upload again.')</script>";
}
else 
{
$query="insert into exam_papers VALUES (null,'$SubjectName','$TypeofExamPaper','$YearofExamPaper','$SubjectCourseName','$SubjectType','$f_newfile',NOW())";
if(mysqli_query($connection,$query)) 
{
echo "<script>alert('New paper has been added successfully.')</script>";
}
     else{
         echo "<script>alert('Something went wrong, Please check paper format or size.')</script>";
     }
    }
    }
        else{
         echo "<script>alert('Something went wrong with your file, Please check paper format or size.')</script>";
     }
}
}
 else
    {
     echo "<script>alert('Invalid file format, Paper must be uploaded with pdf format only')</script>";  
    }
         

}
    
?>
</div>

<?php } ?>

