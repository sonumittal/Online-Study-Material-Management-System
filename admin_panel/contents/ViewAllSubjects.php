<?php
 if(!isset($_SESSION['SuperAdmin'])&&$_SEESION['SuperAdmin']!='true')
 {
  echo "<script>window.location.replace('../Login.php?user_type=Super Admin');</script>";
     exit();
 }
 else
 { ?>
<div id="content" class="p-4 p-md-5 pt-5">
  <h2 class="mb-4">All Subjects</h2>

  <form action="" method="POST">
    <div class="mb-3">
      <select class="form-select" name="SubjectCourse" aria-label="Default select example" required>
        <option value="Common Course">*Select Course</option>
        <option value="MCA">MCA</option>
        <option value="M.Tech (CSE)">M.Tech (CSE)</option>
        <option value="M.Tech (IT)">M.Tech (IT)</option>
        <option value="PHD">PHD</option>
        <option value="B.Tech">B.Tech</option>
      </select>
    </div>
    <div class="mb-3">
      <button type="submit" name="submit" class="btn btn-primary">Find All Data</button>
    </div>
  </form>
  <?php
if(isset($_POST['submit']) and $_POST['SubjectCourse']!='Common Course'){
?>
  <div class="mb-3">
    <div class="accordion accordion-flush" id="accordionFlushExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingOne">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            1. All Core Subjects
          </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th scope="col">Id.</th>
                  <th scope="col">Subject Name</th>
                  <th scope="col">Subject Course Name</th>
                  <th scope="col">Subject Type</th>
                  <th scope="col">Creation date</th>
                </tr>
              </thead>
              <tbody>
                <?php
   $SubjectCourse=$_POST['SubjectCourse'];
  $SubjectType="Core";
$query="select * from subjects where subject_course_name='$SubjectCourse' and subject_type='$SubjectType' order by id desc";
$row=mysqli_query($connection,$query);
         $no=1;
while($result=mysqli_fetch_array($row))
{
    $id=$result['0'];
   echo "<tr><th scope='row'>$no</th>";
      echo "<td>".$result['1']."</td>";
    echo "<td>".$result['2']."</td>";
    echo "<td>".$result['3']."</td>";
    echo "<td>".$result['4']."</td></tr>";
    $no=$no+1;
  }
?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
            2. All Elective Subjects
          </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">
          <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th scope="col">Id.</th>
                  <th scope="col">Subject Name</th>
                  <th scope="col">Subject Course Name</th>
                  <th scope="col">Subject Type</th>
                  <th scope="col">Creation date</th>
                </tr>
              </thead>
              <tbody>
                <?php
  
  $SubjectType="Elective";
$query="select * from subjects where subject_type='$SubjectType' order by id desc";
$row=mysqli_query($connection,$query);
         $no=1;
while($result=mysqli_fetch_array($row))
{
    $id=$result['0'];
   echo "<tr><th scope='row'>$no</th>";
      echo "<td>".$result['1']."</td>";
    echo "<td>".$result['2']."</td>";
    echo "<td>".$result['3']."</td>";
    echo "<td>".$result['4']."</td></tr>";
    $no=$no+1;
  }
?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            3. All Open-Elective Subjects
          </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">
          <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th scope="col">Id.</th>
                  <th scope="col">Subject Name</th>
                  <th scope="col">Subject Course Name</th>
                  <th scope="col">Subject Type</th>
                  <th scope="col">Creation date</th>
                </tr>
              </thead>
              <tbody>
                <?php
  
  $SubjectType="Open-Elective";
$query="select * from subjects where subject_type='$SubjectType' order by id desc";
$row=mysqli_query($connection,$query);
         $no=1;
while($result=mysqli_fetch_array($row))
{
    $id=$result['0'];
   echo "<tr><th scope='row'>$no</th>";
      echo "<td>".$result['1']."</td>";
    echo "<td>".$result['2']."</td>";
    echo "<td>".$result['3']."</td>";
    echo "<td>".$result['4']."</td></tr>";
    $no=$no+1;
  }
?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php 
}
?>
</div>
<?php } ?>
