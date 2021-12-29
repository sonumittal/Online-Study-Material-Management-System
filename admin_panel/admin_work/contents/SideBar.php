<?php
 if(!isset($_SESSION['Admin'])&&$_SEESION['Admin']!='true')
 {
    echo "<script>window.location.replace('../../Login.php?user_type=Admin');</script>";
     exit();
 }
 else
 { ?>
<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	        </button>
        </div>
	  		<div class="img bg-wrap text-center py-4" style="background-image: url(../../Images/TU.jpg);">
	  			<div class="user-logo">
	  				<div class="img" style="background-image: url(../../Images/Tezpur-University.png);"></div>
	  				<h3>Welcome Admin</h3>
	  			</div>
	  		</div>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="./"><span class="fa fa-home mr-3"></span> Home</a>
          </li>
          <li>
            <a href="?UploadNewPaper"><span class="fas fa-upload mr-3"></span> Upload New Paper</a>
          </li>
          <li>
            <a href="?ViewUploadedPapers"><span class="fas fa-edit mr-3"></span> View Uploaded Papers</a>
          </li>
          <li>
            <a href="?UploadNewMaterial"><span class="fas fa-upload mr-3"></span> Upload New Material</a>
          </li>
          <li>
            <a href="?ViewUploadedMaterial"><span class="fa fa-edit mr-3"></span> View Uploaded Material</a>
          </li>
          <li>
            <a href="./Logout.php"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
          </li>
        </ul>

    	</nav>
      <?php  } ?>