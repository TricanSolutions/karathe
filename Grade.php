<?php
session_start();
?>
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
                        <h3 style="color: #0072c6; position: absolute; left: 100px; top: -10px;">Grading</h3>
                        <br>
                        <br>
                        <br>

                        <div class="form-horizontal" role="form">
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="status">Student Name:&nbsp;&nbsp;</label>
                                <div class="col-sm-5">
                                    <select class="form-control" id="studid">

                                    </select>
                                </div>
                                <input type="hidden" class="form-control" id="sid" placeholder="" >
                            </div>

                            <!--                            <div class="form-group">
                                                            <label class="control-label col-sm-3"  for="studid" >Student ID:&nbsp;&nbsp;</label>
                                                            <div class="col-sm-5">
                                                                <input type="text" class="form-control" id="studid" placeholder="Enter Student ID" >
                                                                <input type="hidden" class="form-control" id="sid" placeholder="" >
                                                            </div>
                                                        </div>-->

                            <div class="form-group">
                                <label class="control-label col-sm-3" for="Grade">Grade:&nbsp;&nbsp;</label>
                                <div class="col-sm-5">
                                    <select class="form-control" id="Grade" >
                                        <option value="99">------Select Grade------</option>
                                        <option value="Normal">Normal</option>
                                        <option value="DAN">DAN</option>
                                    </select>
                                </div>
                            </div>



                            <!--                        <div class="form-horizontal" role="form">
                                                        <div class="form-group">
                                                            <label class="control-label col-sm-3"  for="Grade" >Grade:&nbsp;&nbsp;</label>
                                                            <div class="col-sm-5">
                                                                <input type="text" class="form-control" id="Grade" placeholder="Enter Grade" >
                                                            </div>
                                                        </div>-->




                            <!--                            <div class="form-group">
                                                            <label class="control-label col-sm-3" for="DOB">DOB:&nbsp;&nbsp;</label>
                                                            <div class="col-sm-5">
                                                                <input type="text" class="form-control" id="DOB" placeholder="Enter DOB">
                                                            </div>
                                                        </div>-->

                            <!-- <div class="container">
                                <div class="row">
                                    <div class='col-sm-6'>-->
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="tdate">Test Date:&nbsp;&nbsp;</label>
                                <div class="col-sm-5">
                                    <div  class='input-group date' >
                                        <input  type='text' class="form-control" id="tdate" date-date-format ="yyyy-mm-dd"/>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            
                                      





                            <div class="form-group">
                                <label class="control-label col-sm-3" for="Result:">Result:&nbsp;&nbsp;</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="Result" placeholder="Enter Result">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="Examiner:">Examiner:&nbsp;&nbsp;</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="Examiner" placeholder="Enter Examiner's name">
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-sm-3" for="status">Status:&nbsp;&nbsp;</label>
                                <div class="col-sm-5">
                                    <select class="form-control" id="status">
                                        <option value="99">------Select------</option>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                            </div>



                            <div class="field col-md-9 col-md-offset-6">
                                <button type="submit" class="btn btn-info" id="gradeup">Update</button>
                                <button type="submit" class="btn btn-info" id="gradeadd">Submit</button>

                            </div>
                            <!--<label class="control-label">Select File</label>
                            <input id="input-4" name="input4[]" type="file" multiple class="file-loading">-->





                        </div>

                    </div>
                </div>





                <!--User Level Add-->
                <!--                <div class="" style="width: 100%;" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="">
                                        <div class="" style="">-->

                <div class="row">
                    <div class="col-lg-12" style="padding-left: 100px; margin-top: 2%">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Gradings of Student</h3>
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
                                <table id="gradetab" class="table table-bordered table-striped table-hover datable userLevelTble">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Student ID</th>
                                            <th>Grade</th>
                                            <!--<th>Test Date</th>-->
                                            <th>Result</th>
                                            <th>Examiner</th>
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


        <!--User Level End-->

        <?php
        include './FooterImports.php';
        include './footer.php';
        ?>
        <!-- /Footer -->




        <script type="text/javascript">


            $(document).ready(function () {
                getgrade();
                $("#gradeup").hide();
                comboload();
                // $('#datetimepicker1').datetimepicker();

                // $("#input-4").fileinput({showCaption: false});
                
                ///////////////////////////////////////////////////////////////////
//                datepicker
     $("#tdate").datepicker({
                    format: "yyyy-mm-dd",
                    autoclose: true,
                    todayBtn: true,
                    pickerPosition: "bottom-left"
                });
            });
//-----------------------------add---------------------------------------------                   
            $("#gradeadd").click(function () {

                var studid = $("#studid").val();
                var Grade = $("#Grade").val();
                var tdate = $("#tdate").val();
                var Result = $("#Result").val();
                var Examiner = $("#Examiner").val();
                var status = $("#status").val();

                $.ajax({
                    type: 'POST',
                    datatype: 'JSON',
                    url: "gradereg.php",
                    data: {gradeadd: 'gradeadd', studid: studid, Grade: Grade, tdate: tdate, Result: Result, Examiner: Examiner, status: status},
                    success: function (data) {

                        //getstudent();
                        clear()
                        if (data == "1") {
                            //alert("succes");
                            alertify.success("save", 1000);
                            getgrade();
                            //alertify.success("Success log message");
                            clear();
                        } else {
                            alertify.error("Error Occured", 1000);
                            //alertify.error("Error log message");
                            //alert("fail")
                        }
                    }
                });

            });

//----------------image load---------------------------------------------


            // var btnCust = '<button type="button" class="btn btn-default" title="Add picture tags" ' + 
            //    'onclick="alert(\'Call your custom code here.\')">' +
            //    '<i class="glyphicon glyphicon-tag"></i>' +
            //    '</button>'; 
            //$("#avatar-1").fileinput({
            //    overwriteInitial: true,
            //    maxFileSize: 1500,
            //    showClose: false,
            //    showCaption: false,
            //    browseLabel: '',
            //    removeLabel: '',
            //    browseIcon: '<i class="glyphicon glyphicon-folder-open"></i>',
            //    removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
            //    removeTitle: 'Cancel or reset changes',
            //    elErrorContainer: '#kv-avatar-errors-1',
            //    msgErrorClass: 'alert alert-block alert-danger',
            //    defaultPreviewContent: '<img src="/uploads/default_avatar_male.jpg" alt="Your Avatar" style="width:160px">',
            //    layoutTemplates: {main2: '{preview} ' +  btnCust + ' {remove} {browse}'},
            //    allowedFileExtensions: ["jpg", "png", "gif"]
            //});


//---------------edit button---------------------------------------------------
            function edit(id) {
                $("#gradeup").show();
                $("#gradeadd").hide();
                $.ajax({
                    type: 'POST',
                    url: "gradereg.php",
                    dataType: 'JSON',
                    data: {fill: 'update', id: id},
                    success: function (e) {
                        $.each(e, function (index, data) {
                            $("#sid").val(data.id);
                            $("#studid").val(data.student_id);
                            $("#Grade").val(data.grade);
                            $("#tdate").val(data.tested_on);
                            $("#Result").val(data.result);
                            $("#Examiner").val(data.examiner);
                            $("#status").val(data.status);

                            if (data.status == 1) {
                                //                                alert(data.status) 
                                $('#status').val(1);
                            } else {
                                $('#status').val(0);

                            }
                        });
                    }

                });


            }

//------------------------update------------------------------------------------

            $("#gradeup").click(function () {

                var id = $("#sid").val();
                var studid = $("#studid").val();
                var Grade = $("#Grade").val();
                var tdate = $("#tdate").val();
                var Result = $("#Result").val();
                var Examiner = $("#Examiner").val();
                var status = $("#status").val();

                $.ajax({
                    type: 'POST',
                    datatype: 'JSON',
                    url: "gradereg.php",
                    data: {gradeup: 'gradeup', id: id, studid: studid, Grade: Grade, tdate: tdate, Result: Result, Examiner: Examiner, status: status},
                    success: function (data) {

                        $('input[type=text]').val('');
                       // getgrade();
                        //clear()
                        if (data == "1") {
                            //alert("succes");
                            alertify.success("Updates", 1000);
                            getgrade();
                            //alertify.success("Success log message");
                            clear();
                        } else {
                            alertify.error("Error Occured", 1000);
                            //alertify.error("Error log message");
                            //alert("fail")
                        }
                    }
                });
            });

//-------------------delete-------------------------------------------------------
            function del(id) {
                //var id = $("#id").val();
                //                  alertify.confirm('Confirm Title', 'Confirm Message', function(){ alertify.success('Ok') }
                //                , function(){ alertify.error('Cancel')});
                //var confirmation = confirm("are you sure you want to remove the item?");
                alertify.confirm("This  will spermenently delete Data from Database", function (e) {
                    if (e) {
                        // user clicked "ok"
                        $.ajax({
                            type: "POST",
                            url: "gradereg.php",
                            dataType: 'JSON',
                            data: {del: 'delete', id: id},
                            success: function (data) {

                                if (data == "1") {
                                    //alert("succes");
                                    alertify.success("deleted", 1000);
                                    getgrade();
                                    //alertify.success("Success log message");
                                    clear();
                                } else {


                                    alertify.error("Error Occured", 1000);
                                    //alertify.error("Error log message");
                                    //alert("fail")
                                }
                            }
                        });

                    } else {
                        // user clicked "cancel"
                    }
                });
            }

//---------------student cmbo load-------------------------------------------
            function comboload() {
                var comdata = '';

                $.post('gradereg.php', {loaddrop: 'cat'}, function (e) {

                    if (e.length === 0 || e === null) {
                        comdata = '<option value="">--No Data--</option>'

                        $('#studid').html('').append(comdata);
                    } else
                    {
                        $.each(e, function (index, data) {

                            comdata += '<option value="' + data.id + '">' + data.name_with_initials + '</option>';
                        });
                        $('#studid').html('').append(comdata);
                    }

                }, "json");
            }









//-------------------DOB-------------------------------------------------------

// $('#datetimepicker').data("DateTimePicker").FUNCTION()


            $("#logout").click(function () {

                logout();
            });
//--------------------load category table--------------------------------------
            function getgrade() {
                $.ajax({
                    type: 'POST',
                    url: "gradereg.php",
                    data: {loadgrade: 'loadgrade'},
                    success: function (data) {
                        $("#gradetab tbody ").html('').append(data);
                    }
                });
            }



            function clear() {
                var studid = $("#studid").val("");
                var Grade = $("#Grade").val("");
                var tdate = $("#tdate").val("");
                var Result = $("#Result").val("");
                var Examiner = $("#Examiner").val("");
                var status = $("#status").val("");

            }

        </script>

    </body>

</html>
