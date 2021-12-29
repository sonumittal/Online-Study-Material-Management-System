<?php
 if(!isset($_SESSION['SuperAdmin'])&&$_SEESION['SuperAdmin']!='true')
 {
  echo "<script>window.location.replace('../Login.php?user_type=Super Admin');</script>";
     exit();
 }
 else
 { ?>
<div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">All Notifications</h2>
        <table class="table table-striped table-hover">
        <thead>
    <tr>
      <th scope="col">Id.</th>
      <th scope="col">Title</th>
      <th scope="col">Creation date</th>
      <th scope="col">File</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
 <tbody>
 <?php
$query="select * from notification order by id desc";
$row=mysqli_query($connection,$query);
         $no=1;
while($result=mysqli_fetch_array($row))
{
    $id=$result['0'];
   echo "<tr><th scope='row'>$no</th>";
      echo "<td>".$result['1']."</td>";
    echo "<td>".$result['3']."</td>";
    $file=$result['2'];
  echo "<td><a href='uploaded_files/notifications/".$file."' target='blank'>".$file."</a></td>";       
  echo "<td><a href='./contents/delete_papers_material_notification_function.php?notification_delete_id=$id'>Delete</a></td>
    </tr>";
    $no=$no+1;
  }
?>
  </tbody>
</table>
      </div>
      <?php } ?>