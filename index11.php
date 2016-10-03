
<html>

    <head>

        <?php
        include './HeaderImports.php';
        ?>
    </head>

    <body>


        <?php
        include './header.php';
        ?>
        <div id="wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-11" style="padding-left: 90px;">
                        <h3 style="color: #0072c6; position: absolute; left: 100px; top: -10px;">Category</h3>
                        <br>
                        <br>
                        <br>
                        <div class="form-inline" role="form">
                            <div class="form-group col-sm-4">
                                <label for="id">ID:&nbsp;&nbsp;</label>
                                <input type="text" class="form-control" id="email" placeholder="Enter ID">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="name">Name:&nbsp;&nbsp;</label>
                                <input type="text" class="form-control" id="pwd" placeholder="Enter Name">
                            </div>
                            <div class="form-group col-sm-3">
                                <label for="name">Status:&nbsp;&nbsp;</label>
                                <select class="form-control" id="sel1">
                                    <option>------Select------</option>
                                    <option>0</option>
                                    <option>1</option>
                                    <option>0</option>
                                </select>
                            </div>
                            <div class="col-sm-1">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>

                        </div>

                    </div>
                </div>





                <!--User Level Add-->
                <div class="" style="width: 100%;" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="">
                        <div class="" style="">
                            <div class="row">

                                <div class="row">
                                    <div style="height: 25px;">

                                    </div>

                                </div>
                                <div class="col-lg-8">

                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            <div style="height: 45px;"></div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-11" style="padding-left: 100px;">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Details of category</h3>
                                            <div class="pull-right">
                                                <span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
                                                    <i class="glyphicon glyphicon-filter"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="panel-body filterTableSearch">
                                            <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters=".userLevelTble"/>
                                        </div>
                                        <div class="scrollable" style="height: 300px; overflow-y: auto">
                                            <table class="table table-bordered table-striped table-hover datable userLevelTble">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Name</th>
                                                        <th>Status</th>
                                                        <th>Edit / Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>                                                             
                                                </tbody>
                                            </table>
                                            <input type="hidden" id="chkString">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 

            </div>
        </div>
        <!--User Level End-->

        <?php
        include './FooterImports.php';
        include './footer.php';
        ?>
        <!-- /Footer -->



    </body>

</html>
