<?php
    include_once('./admin_panel/connection.php');
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>School of Engineering | Tezpur University</title>
    <link rel="shortcut icon" href="Images/favicon.ico" type="image/x-icon">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/style.css">
    
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css"> -->

  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>

 
<!----------------------------------header------------------------------------>
<?php
include_once('./contents/Header.php');
?>
    <!----------------------------------------end of header---------------------------------->


<!-----------------------------------All main sections--------------------------------->
<?php
          if(!isset($_GET['Papers'])){
          if(!isset($_GET['Material'])){
          if(!isset($_GET['Notification'])){
                include_once('./components/Home.php');
          }}}
         //------Subjects--------- 
          if(isset($_GET['Papers'])){
            include_once('./components/Papers.php');
      }
        
        
      //-------end of subjects----
         //----------Material------ 
          if(isset($_GET['Material'])){
            include_once('./components/Material.php');
          }
     
      //----------end of material---------

      //-----Notification--------
      if(isset($_GET['Notification'])){
        include_once('./components/Notification.php');
  }
      //-----end of Notification--------
                ?>
<!-----------------------------------All main sections--------------------------------->
    <!----footer---->
    <?php
include_once('./contents/Footer.php');
?>
    <!---end of footer---------->
    <!---copyright---->
    <div class="container-fluid copyright">
        <div class="row">
            <p>© 2021 School Of Engineering, All Rights Reserved. Developed by <span><a target="_blank"
                        href="https://sonumittal.github.io/" style="text-decoration:none" />Sonu Mittal</a></span> &
                Rishav Mittal</p>
        </div>
    </div>
    <!----end of copyright---->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
</script> -->

<script>
    new bootnavbar();
    // (function () {
    // });


    function bootnavbar(el = 'main_navbar', options){
    let defaultOption  ={

    }

    options = {...defaultOption, ...options }


    var isMobile = {
        Android: function() {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function() {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function() {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function() {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function() {
            return navigator.userAgent.match(/IEMobile/i) || navigator.userAgent.match(/WPDesktop/i);
        },
        any: function() {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    };

    this.init = function(){
        var dropdowns = document.getElementById(el).getElementsByClassName("dropdown");
        console.log(dropdowns);
        for (var i = 0; i < dropdowns.length; i++) {
            var dropdown = dropdowns.item(i);
            dropdown.addEventListener("mouseover", function(){
                this.classList.add('show');
                this.getElementsByClassName("dropdown-menu")[0].classList.add('show');
            });
            dropdown.addEventListener("mouseout", function(){
                this.classList.remove('show');
                this.getElementsByClassName("dropdown-menu")[0].classList.remove('show');
            });
        }
        // document.getElementById(el).getElementsByClassName("dropdown").forEach(dropdown => {
        //     dropdown.addEventListener("mouseover", function(){
        //         dropdown.classList.add('show');
        //         dropdown.getElementsByClassName("dropdown-menu")[0].classList.add('show');
        //     });
        //     dropdown.addEventListener("mouseout", function(){
        //         dropdown.classList.remove('show');
        //         dropdown.getElementsByClassName("dropdown-menu")[0].classList.remove('show');
        //     });
        // });
    }

    this.init();    
}
</script>

</body>

</html>