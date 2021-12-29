<?php
session_start();
 if(!isset($_SESSION['SuperAdmin'])&&$_SEESION['SuperAdmin']!='true')
 {
    echo "<script>window.location.replace('../Login.php?user_type=Super Admin');</script>";
     exit();
 }
 else
 {
include_once('../connection.php');
 //*----deleteing material-------------*//
 if(isset($_GET['material_delete_id']))
 {
 $id=$_GET['material_delete_id'];
 $query="select * from study_material where id='$id'";
 $row=mysqli_query($connection,$query);
 while($result=mysqli_fetch_array($row))
 {
     $file=$result['6'];
 }
 $query = "delete from study_material where id='$id'";
 if(mysqli_query($connection,$query))
 {
     
 $data=$file;
     $dir = "../uploaded_files/material";
     $dirHandle=opendir($dir);
     while ($file = readdir($dirHandle)) {
    if($file==$data) {
         if(unlink($dir.'/'.$file))
          {
     echo "<script>alert('Material has been deleted successfully.')</script>";
     echo "<script>window.location.replace('../?ViewUploadedMaterial');</script>";
       }
        else
 {
     echo "<script>alert('Something went wrong, Please Try Again.)</script>"; 
 }
                                              
         }
     }
     closedir($dirHandle);
 }
     }
          //*----end of deleteing material------------*//

          //*----deleteing material-------------*//
 if(isset($_GET['paper_delete_id']))
 {
 $id=$_GET['paper_delete_id'];
 $query="select * from exam_papers where id='$id'";
 $row=mysqli_query($connection,$query);
 while($result=mysqli_fetch_array($row))
 {
     $file=$result['6'];
 }
 $query = "delete from exam_papers where id='$id'";
 if(mysqli_query($connection,$query))
 {
     
 $data=$file;
     $dir = "../uploaded_files/papers";
     $dirHandle=opendir($dir);
     while ($file = readdir($dirHandle)) {
    if($file==$data) {
         if(unlink($dir.'/'.$file))
          {
     echo "<script>alert('Paper has been deleted successfully.')</script>";
     echo "<script>window.location.replace('../?ViewUploadedPapers');</script>";
       }
        else
 {
     echo "<script>alert('Something went wrong, Please Try Again.)</script>"; 
 }
                                              
         }
     }
     closedir($dirHandle);
 }
     }
          //*----end of deleteing material------------*//


        //*----deleteing notification-------------*//
        if(isset($_GET['notification_delete_id']))
        {
        $id=$_GET['notification_delete_id'];
        $query="select * from notification where id='$id'";
        $row=mysqli_query($connection,$query);
        while($result=mysqli_fetch_array($row))
        {
            $file=$result['2'];
        }
        $query = "delete from notification where id='$id'";
        if(mysqli_query($connection,$query))
        {
            
        $data=$file;
            $dir = "../uploaded_files/notifications";
            $dirHandle=opendir($dir);
            while ($file = readdir($dirHandle)) {
           if($file==$data) {
                if(unlink($dir.'/'.$file))
                 {
            echo "<script>alert('Notificatino has been deleted successfully...')</script>";
            echo "<script>window.location.replace('../?ViewNotifications');</script>";
            // header("location:../?ViewNotifications");
              }
               else
        {
            echo "<script>alert('Something went wrong, Please Try Again.)</script>"; 
        }
                                                     
                }
            }
            closedir($dirHandle);
        }
            }
                 //*----end of deleteing notification-------------*//
        }
?>