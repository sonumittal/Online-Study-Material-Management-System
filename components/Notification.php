<!----------  content of notification middle section -->
<main class="container">

<div class="align-items-center p-3 my-3 rounded shadow-sm well">
    <div class="row">
    <div class="col-sm-12" style="margin-top:20px;text-justify;">
         
        <h3 style="text-decoration: underline;">All News & Notifications</h3>
        <div class="mt-2">
            <div class="panel-body" style="min-height:400px;padding:20px;">

            <?php
                  $query='select * from notification order by id desc';
                  $row=mysqli_query($connection,$query);
                  while($result=mysqli_fetch_array($row)){
                      $title=$result['1'];
                      $file=$result['2'];
                      $date=$result['3'];
                  ?>
                    <a href="admin_panel/uploaded_files/notifications/<?php echo $file ?>" target="_blank"><p style="font-weight:bold"><?php echo $title ?><span style="float:right"><?php echo $date ?></span></p></a>  
                    <?php } ?>
               

            </div>
        </div>
    </div>
</div>
</div>
</main>
<!----------end of notification content middle section -->