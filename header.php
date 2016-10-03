

<nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Student Registration System</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class=""><a href="dashboard.php">Home</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">File <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="Register.php">Student Registration</a></li>
                                    <li><a href="Grade.php">Grading</a></li>  
                                    <li><a href="competition.php">Competition</a></li>   
                                </ul>
                            </li>
                            <li><a href="#">View</a></li>
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#"> <?php echo $_SESSION['name']; ?></a></li>
                            <li class="active pull-right" style="padding-right: 10px;">
                                <a href="#" class="btn btn-danger" id="logout" style=""><i class="fa fa-lg fa-sign-out"></i>Logout</a></li>
                           
                            <!--<li> <a href="login.html" data-toggle="tooltip" data-original-title="Logout" data-placement="bottom" class="btn btn-metis-1 btn-sm">-->
                                        <!--<i class="fa fa-power-off"></i>  </a></li>-->
                            <!--<li><button type="button" class="btn btn-default" id="logout" >LogOut</button></li>-->
                            <!--<li><input type="button" id="logout" value="Logout" class="btn btn-danger"></li>-->
<!--                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </li>-->
                        </ul>
                                                <form class="navbar-form navbar-left" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
            <!-- End /nav -->
            
            <script type="text/javascript">
                  $("#logout").click(function () {

            logout();
        });

            </script>