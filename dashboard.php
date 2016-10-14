<?php
session_start();
?>
<html>

    <head>

        <?php
        include './HeaderImports.php';
        ?>
    </head>
    <style>
        
     .hovereffect {
  width: 100%;
  /*height: 100%;*/
  float: left;
  overflow: hidden;
  position: relative;
  text-align: center;
  cursor: default;
}

.hovereffect .overlay {
/*  width: 100%;
  height: 100%;*/
/*  position: absolute;
  overflow: hidden;
  top: 0;
  left: 0;
  opacity: 0;
  filter: alpha(opacity=0);
  background-color: rgba(0,0,0,0.5);
  -webkit-transition: all 0.4s cubic-bezier(0.88,-0.99, 0, 1.81);
  transition: all 0.4s cubic-bezier(0.88,-0.99, 0, 1.81);*/
}

.hovereffect img {
  display: block;
  position: relative;
  -webkit-transition: all 0.4s cubic-bezier(0.88,-0.99, 0, 1.81);
  transition: all 0.4s cubic-bezier(0.88,-0.99, 0, 1.81);
}

.hovereffect h2 {
  text-transform: uppercase;
  color: #fff;
  text-align: center;
  position: relative;
  font-size: 17px;
  background: rgba(0,0,0,0.6);
  -webkit-transform: translatey(-100px);
  -ms-transform: translatey(-100px);
  transform: translatey(-100px);
  -webkit-transition: all 0.4s cubic-bezier(0.88,-0.99, 0, 1.81);
  transition: all 0.4s cubic-bezier(0.88,-0.99, 0, 1.81);
  padding: 10px;
}

.hovereffect a.info {
  text-decoration: none;
  display: inline-block;
  text-transform: uppercase;
  color: #fff;
  border: 1px solid #fff;
  background-color: transparent;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
  /*margin: 50px 0 0;*/
  /*padding: 7px 0px;*/
}

.hovereffect a.info:hover {
  box-shadow: 0 0 5px #fff;
}

.hovereffect:hover img {
  -ms-transform: scale(1.2);
  -webkit-transform: scale(1.2);
  transform: scale(1.2);
}

.hovereffect:hover .overlay {
  opacity: 0.5;
  filter: alpha(opacity=100);
}

.hovereffect:hover h2,.hovereffect:hover a.info {
  opacity: 1;
  filter: alpha(opacity=100);
  -ms-transform: translatey(0);
  -webkit-transform: translatey(0);
  transform: translatey(0);
}

.hovereffect:hover a.info {
  -webkit-transition-delay: .2s;
  transition-delay: .2s;
}   
        
        
        
    </style>
    <body>


        <?php
        include './header.php';
        ?>
        <div id="wrapper">
            <div class="container">
               
<!--                <a href="Register.php" class="">
                                           <div class="col-md-3">
                                             <div class="thumbnail" style="">
                                                 <img src="img/dashbord/usermanege.png" style="width:100px; height:100px">
                                              <div class="caption text-center" style="margin-top:-20px; ">
                                              <h3></h3>
                                                  <p></p>
                                                 </div>
                                                  </div>
                                                 </div>
                                              </a>
<a href="" class="">
                                           <div class="col-md-3">
                                             <div class="thumbnail" style="">
                                                 <img src="img/dashbord/usermanege.png" style="width:100px; height:100px ">
                                              <div class="caption text-center" style="margin-top:-20px; ">
                                              <h3></h3>
                                                  <p></p>
                                                 </div>
                                                  </div>
                                                 </div>
                                              </a>-->


          <div class="row col-lg-12 "  >
              <a class=""  href="Register.php">
                        <div class="col-md-4 vi ">
                            <div class="hovereffect thumbnail" style="background-color: transparent; border:1px black solid; border-radius: 15px;  min-height: 175px; width: 300px;">
                                <img class="img-responsive"src="img/dashbord/student.png" style="width:120px; height:120px">
                                <div class="caption text-center">
                                    <h3 style="font-size: 20pt; font-family:serif ; color: black">Student Registration</h3>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </a> 

              
              
<!--              <div class="col-lg-3 ">
    <div class="hovereffect">
        <img class="img-responsive" src="img/dashbord/student.png" alt="">
        <div class="caption text-center">
           <h2>Hover effect 1v2</h2>
           <a class="info" href="#">link here</a>
           <h3  style="font-size: 20pt; font-family:serif ; color: black">Student Registration</h3>
        </div>
    </div>
</div>-->
                    <a class="" href="Grade.php">
                        <div class="col-md-4 ">
                            <div class="hovereffect thumbnail" style="background-color: transparent; border:1px black solid; border-radius: 15px;   min-height: 175px; width: 300px;">
                                <img src="img/dashbord/grade.jpg" style="width:120px; height:120px">
                                <div class="caption text-center">
                                    <h3 style="font-size: 20pt; font-family: serif ; color: black"> Grading</h3>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </a> 
              <a class="" href="competition.php">
                        <div class="col-md-4">
                            <div class="hovereffect thumbnail" style="background-color: transparent; border:1px black solid; border-radius: 15px;   min-height: 175px; width: 300px;">
                                <img src="img/dashbord/competition.jpg" style="width:120px; height:120px">
                                <div class="caption text-center">
                                    <h3 class=""style="font-size: 20pt; font-family: serif ; color: black"> Competition</h3>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </a> 
</div>      
                
                
<div class="pull-right">
    <!--<div class="hovereffect">-->
    <img  src="img/dashbord/pg.png" style="width:250px; height:250px" > 
    <!--</div>-->
</div>

                <!--User Level Add-->
<!--                <div class="" style="width: 100%;" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">-->
<!--                    <div class="">
                        <div class="" style="">-->
                           
                            <!--<div class="row">-->
                               
                            <!--</div>-->
<!--                        </div>
                    </div>-->
                <!--</div>--> 

            </div>
        </div>
        <!--User Level End-->

        <?php
        include './FooterImports.php';
        include './footer.php';
        ?>
        <!-- /Footer -->
        <script type="text/javascript">
$(document).ready(function (e) {

//                alert(uname);
                pageProtect();
                });
</script>
    </body>

</html>
