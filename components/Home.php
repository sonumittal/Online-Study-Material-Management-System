<!---------- notice boeard and welcome content middle section -->
<main class="container">

<div class="align-items-center p-3 my-3 rounded shadow-sm">

    <!-- notice bord -->
    <div class="row">
        <div class="col-sm-4">
            <!----notice board and content area----->
            <section>
                <div class="container">
                    <div class="page-header" style="border: 2px solid #dedcdc;border-top: 0;border-bottom:0;color: #A2BFE9">
                        <div class="panel panel-danger" style="max-height:400px;overflow:hidden;">
                            <section style="color: #fff;
                            background-color: #A2BFE9;border-color: #A2BFE9 ;padding:5px;border-radius:5px 5px 0 0">
                                <h2 class="panel-title" style="text-align:center;font-size:20px;"><b>News & Notifications</b></h2>
                                </section>

                            <marquee behavior="scroll" direction="up" onmouseover="this.stop();"
                                onmouseout="this.start();" scrolldelay="100">
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
                            </marquee>


                        </div>

                        <section style="color: #fff;
                        background-color: #A2BFE9;border-color: #A2BFE9 ;padding:5px;border-radius:0 0 5px 5px">
                            <a href="index.php?Notification"><p class="panel-title" style="text-align:center;">Click here for all Notificatoins</p></a>
                            </section>

                    </div>
            </section>

            <!----end notice board and content area---->
        </div>
        <!-- end of notice bord -->

        <!-- welcome section -->
        <div class="col-sm-8" style="margin-top:20px;text-align: justify;">
         
                <h3>Welcome to School Of Engineering</h3>
                <div class="mt-2">School of Engineering, Tezpur University was established in 2006. School of
                    Engineering has nine Departments viz. Applied Sciences(ASc), Civil Engineering(CE), Computer
                    Science & Engineering (CSE), Electronics & Communication Engineering (ECE), Electrical
                    Engineering (EE), Energy Technology (ENE), Design, Food Engineering & Technology (FET),
                    Mechanical Engineering (ME). various educational programmes offered by School of Engineering
                    include Under Graduate (UG), Post Graduate(PG) and Ph.D programmes.

                    All these Departments have their own Academic building. There is also a common School of
                    Engineering building with an approximate built-up area of 2980 Sq.m for use of all the
                    Departments. Various common facilities are made available in this common building. These
                    include Classrooms, Chemistry and Physics laboratories, Computer Centre, Gallery , Video
                    Conferency Rooms, Language Laboratory, Smart Classrooms etc., Smart Lecture Halls are used
                    for conducting common classes of School of Engineering and in the class rooms, Departmental
                    classes are conducted. besides these, School of Engineering have one Microsoft Incubation
                    Centre and Centre for Innovation, incubation and Entrepreneurship (CIIE). Office of the
                    Dean, School of Engineering located in the common Building has its own office rooms and a
                    conference room. One B.Tech Admission Cell for North-East category admission (BSSC), another
                    one B.Tech admission Cell for JoSSA admission, one AICTE cell and an Examination control
                    room are also located at this building.
                </div>
            </div>
        </div>
        <!-- end of welcome section -->
    </div>

</div>
</main>
<!----------end of notice boeard and welcome content middle section -->