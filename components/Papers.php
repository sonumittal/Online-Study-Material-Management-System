<!----------  Papers middle section -->
<main class="container subjects">

<div class="align-items-center p-3 my-3 rounded shadow-sm well">
    <h5>Select subject for previous year exam paper:</h5>
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
      <select class="form-select" name="TypeofExamPaper" aria-label="Default select example" required>
        <option value="*Select Type of Exam Paper">*Select Type of Exam Paper</option>
        <option value="1st Test">1st Test</option>
        <option value="2nd Test (MIDTERM)">2nd Test (MIDTERM)</option>
        <option value="3rd Test">3rd Test</option>
        <option value="4th Test (ENDTERM)">4th Test (ENDTERM)</option>
      </select>
    </div>
    <div class="mb-3">
      <button type="submit" name="submit1" class="btn btn-primary">Find</button>
    </div>
  </form>
  <!-- 2nd form -->
  <?php
if(isset($_POST['submit1']) and $_POST['SubjectCourse']!='Common Course' and $_POST['TypeofExamPaper']!='*Select Type of Exam Paper'){ 
     $SubjectCourse=$_POST['SubjectCourse']; 
     $TypeofExamPaper=$_POST['TypeofExamPaper']; ?>
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
  <input type="hidden" class="form-control" value="<?php echo $TypeofExamPaper?>" name="TypeofExamPaper" id="exampleInputText1" maxlength="100" required>
    
    
    <button type="submit" name="submit2" class="btn btn-primary">Find All Data</button>
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

<!----------  subjects middle section -->


  
    <div class="mt-2">
        <div class="panel-body" style="min-height:400px;padding:20px;">
<?php 
if(isset($_POST['submit2'])){
$SubjectType = mysqli_real_escape_string($connection,$_POST['SubjectType']);
$TypeofExamPaper = mysqli_real_escape_string($connection,$_POST['TypeofExamPaper']);
if($SubjectType == "Core"){
    $SubjectCourseName = mysqli_real_escape_string($connection,$_POST['SubjectCourse']);
}
else{
    $SubjectCourseName ="Common Course";
}

 if(isset($_POST['Core']) and $SubjectType=='Core'){
    $SubjectName = mysqli_real_escape_string($connection,$_POST['Core']);
 }
 if(isset($_POST['Elective']) and $SubjectType=='Elective'){
    $SubjectName = mysqli_real_escape_string($connection,$_POST['Elective']);
 }
 if(isset($_POST['Open-Elective']) and $SubjectType=='Open-Elective'){
    $SubjectName = mysqli_real_escape_string($connection,$_POST['Open-Elective']);
 }
//  echo $SubjectType;
//  echo $SubjectName;
//  echo $SubjectCourseName;

?>
  <h5>Download Subject Name study material from here:</h5>
 <table class="table table-striped table-hover">
 <thead>
   <tr>
   <th scope="col">Id.</th>
<th scope="col">Subject Name</th>
<th scope="col">Subject Exam Paper Type</th>
<th scope="col">Subject Exam Paper Year</th>
<!-- <th scope="col">Subject Course Name</th> -->
<th scope="col">Subject Type</th>
<th scope="col">Uploading Date</th>
<th scope="col">File</th>
   </tr>
 </thead>
 <tbody>
   <?php

$query="select * from exam_papers where subject_exam_paper_type	='$TypeofExamPaper' AND subject_type='$SubjectType' AND subject_course_name='$SubjectCourseName' AND subject_name='$SubjectName' order by subject_exam_paper_year desc";
$row=mysqli_query($connection,$query);
$no=1;
while($result=mysqli_fetch_array($row))
{
$id=$result['0'];
echo "<tr><th scope='row'>$no</th>";
echo "<td>".$result['1']."</td>";
echo "<td>".$result['2']."</td>";
echo "<td>".$result['3']."</td>";
// echo "<td>".$result['4']."</td>";
echo "<td>".$result['5']."</td>";
echo "<td>".$result['7']."</td>";
$file=$result['6'];
echo "<td><a href='admin_panel/uploaded_files/papers/".$file."' target='blank'>".$file."</a></td></tr>";
$no=$no+1;
}}
?>
 </tbody>
</table>
        </div>
    </div>


</div>
</main>
<!----------end of  Papers middle section -->