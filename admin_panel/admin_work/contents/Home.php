<?php
 if(!isset($_SESSION['Admin'])&&$_SEESION['Admin']!='true')
 {
    echo "<script>window.location.replace('../../Login.php?user_type=Admin');</script>";
     exit();
 }
 else
 { ?>
 <div id="content" class="p-4 p-md-5 pt-5">
        <h4 class="mb-4">Welcome to Online Study Material Management System <span style="font-weight:600;">Admin-Panel</span></h4>
        <p>Previous year exam papers and Study material can be managed here.</p>
      </div>

      <?php } ?>