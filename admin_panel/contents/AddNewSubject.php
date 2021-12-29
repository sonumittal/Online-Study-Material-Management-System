<?php
 if(!isset($_SESSION['SuperAdmin'])&&$_SEESION['SuperAdmin']!='true')
 {
  echo "<script>window.location.replace('../Login.php?user_type=Super Admin');</script>";
     exit();
 }
 else
 { ?>
<div id="content" class="p-4 p-md-5 pt-5">
  <h2 class="mb-4">Add New Subject</h2>
  <form action="" method="post">
    <div class="mb-3">
      <select class="form-select" name="SubjectType" aria-label="Default select example" id="select1" onchange="myFunction()" required>
        <option selected>*Select Subject Type</option>
        <option value="Core">Core</option>
        <option value="Elective">Elective</option>
        <option value="Open-Elective">Open-Elective</option>
      </select>
    </div>
    <div class="mb-3">
      <select class="form-select" name="SubjectCourse" aria-label="Default select example" id="select2" style="display: none;" required>
        <option value="Common Course">*Select Course</option>
        <option value="MCA">MCA</option>
        <option value="M.Tech (CSE)">M.Tech (CSE)</option>
        <option value="M.Tech (IT)">M.Tech (IT)</option>
        <option value="PHD">PHD</option>
        <option value="B.Tech">B.Tech</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">New Subject Name</label>
      <input type="text" name="NewSubjectName" class="form-control" id="exampleInputEmail1" maxlength="100" required>
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
      <label class="form-check-label" for="exampleCheck1">*I hereby declare that the details furnished above are true
        and correct to the best of my knowledge and belief. In case any of the above information is found to be false or
        untrue or misleading or misrepresenting, I am
        aware that I may be held liable for it.</label>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<script>
  function myFunction() {
    var x = document.getElementById("select1").value;
    if (x == "Core") document.getElementById("select2").style.display = "block";
    else document.getElementById("select2").style.display = "none";
  }
</script>
<!-- php code -->
<?php
if(isset($_POST['submit'])){
$SubjectType=$_POST['SubjectType'];
$SubjectCourse=$_POST['SubjectCourse'];
$NewSubjectName=$_POST['NewSubjectName'];
if($SubjectType=="Elective" OR $SubjectType=="Open-Elective"){
  $SubjectCourse="Common Course";
}

// checking if subject is already in DB
$login_query="select * from subjects where subject_name='$NewSubjectName' AND subject_course_name='$SubjectCourse' AND subject_type='$SubjectType' "; 
$run=mysqli_query($connection,$login_query);

if(mysqli_num_rows($run)>0)
{
  echo "<script>alert('This Subject is already available.')</script>";
}
else 
{
  $result=mysqli_fetch_array($run);
  if(strtolower($result[1])===strtolower($NewSubjectName)){
    echo "<script>alert('This Subject is already available.')</script>";
  }
  else{
$query="insert into subjects values(NULL,'$NewSubjectName','$SubjectCourse','$SubjectType',NOW())";
    if(mysqli_query($connection,$query)){
        echo "<script>alert('New Subject has been added successfully.')</script>";
    }
    else{
         echo "<script>alert('Something went wrong, Please Try Again.')</script>";
    }
  }
}
}
 }
?>
 <!-- end of php code -->