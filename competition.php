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
                    <div class="col-lg-10" style="padding-left: 90px;">
                        <h3 style="color: #0072c6; position: absolute; left: 100px; top: -10px;">Competition</h3>
                        <br>
                        <br>
                        <br>

                        <!--<!--->
                        <!--                        <div class="form-horizontal" role="form">
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-3"  for="studid" >Student ID:&nbsp;&nbsp;</label>
                                                        <div class="col-sm-5">
                                                            <input type="text" class="form-control" id="studid" placeholder="Enter Student ID" >
                                                            <input type="hidden" class="form-control" id="sid" placeholder="" >
                                                        </div>
                                                    </div>-->
                        <div class="form-horizontal" role="form">
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="status">Student Name:&nbsp;&nbsp;</label>
                                <div class="col-sm-5">
                                    <select class="form-control" id="studid">
                                    </select>
                                </div>
                                <input type="hidden" class="form-control" id="sid" placeholder="" >
                            </div>

                            <!--<div class="form-horizontal" role="form">-->
                            <div class="form-group">
                                <label class="control-label col-sm-3"  for="comname" >Competition name:&nbsp;&nbsp;</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="comname" placeholder="Enter Competition name" >
                                </div>
                            </div>




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
                                <label class="control-label col-sm-3" for="tdate">Competition Date:&nbsp;&nbsp;</label>
                                <div class="col-sm-5">
                                    <div  class='input-group date' >
                                        <input  type='text' class="form-control" id="tdate" date-date-format ="yyyy-mm-dd"/>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>


                            <!--                                        <div  class='input-group date' id='date'>
                                                                        <input  type='text' class="form-control" id="date"/>
                                                                        <span class="input-group-addon">
                                                                            <span class="glyphicon glyphicon-calendar"></span>
                                                                        </span>
                            <!--</div>-->
                            <!--</div>-->





                            <div class="form-group">
                                <label class="control-label col-sm-3" for="comgrade:">Grade:&nbsp;&nbsp;</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="comgrade" placeholder="Enter Grade">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="place:">Place:&nbsp;&nbsp;</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="place" placeholder="Enter Place">
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-sm-3" for="status">Status:&nbsp;&nbsp;</label>
                                <div class="col-sm-5">
                                    <select class="form-control" id="comstatus">
                                        <option value="99">------Select------</option>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                            </div>



                            <div class="field col-md-9 col-md-offset-6">
                                <button type="submit" class="btn btn-info" id="comadd">Submit</button>
                                <button type="submit" class="btn btn-info" id="comup">Update</button>
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
                                <h3 class="panel-title">Competition details</h3>
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
                                <table id="comtab" class="table table-bordered table-striped table-hover datable userLevelTble">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Student ID</th>
                                            <th>Competition name</th>      
                                            <!--<th>Date</th>-->
                                            <th>Grade</th>
                                            <th>Place</th>
                                            <th>Status</th>
                                            <th>Edit</th>
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
                getcom();
                $("#comup").hide();
                comboload();
                // $('#datetimepicker1').datetimepicker();

                // $("#input-4").fileinput({showCaption: false});


//----------------------enter press---------------------------------------------
                $(".form-control").keyup(function (event) {
                    if (event.keyCode == 13) {
                        textboxes = $("input.form-control");
                        currentBoxNumber = textboxes.index(this);
                        if (textboxes[currentBoxNumber + 1] != null) {
                            nextBox = textboxes[currentBoxNumber + 1];
                      
                            nextBox.focus();
                            nextBox.select();
                        }
                        event.preventDefault();
                        return false;
                    }
                });
            });

            $("#tdate").datepicker({
                format: "yyyy-mm-dd",
                autoclose: true,
                todayBtn: true,
                pickerPosition: "bottom-left"
            });

            $("#comadd").click(function () {

                var studid = $("#studid").val();
                var comname = $("#comname").val();
                var tdate = $("#tdate").val();
                var comgrade = $("#comgrade").val();
                var place = $("#place").val();
                var comstatus = $("#comstatus").val();
                //var status =  $("#sell option:selected").val();
                //                if (name == "" || status == "")
                //                {
                //                    alertify.error("Fill", 1000);
                //                }
                //                else {
                $.ajax({
                    type: 'POST',
                    datatype: 'JSON',
                    url: "competitionreg.php",
                    data: {comadd: 'comadd', studid: studid, comname: comname, tdate: tdate, comgrade: comgrade, place: place, comstatus: comstatus},
                    success: function (data) {

                        //getstudent();
                        //clear()
                        if (data == "1") {
                            //alert("succes");
                            alertify.success("save", 1000);
                            getcom();
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

    

            //---------------edit button---------------------------------------------------
            function edit(id) {
                $("#comadd").hide();
                $("#comup").show();
                $.ajax({
                    type: 'POST',
                    url: "competitionreg.php",
                    dataType: 'JSON',
                    data: {fill: 'update', id: id},
                    success: function (e) {

                        $.each(e, function (index, data) {
                            $("#sid").val(data.id);
                            $("#studid").val(data.student_id);
                            $("#comname").val(data.name_of_competition);
                            $("#tdate").val(data.competition_date);
                            $("#comgrade").val(data.grade);
                            $("#place").val(data.palce);
                            $("#comstatus").val(data.status);


                            if (data.status == 1) {
                                //                                alert(data.status) 
                                $('#comstatus').val(1);
                            } else {
                                $('#comstatus').val(0);

                            }
                        });
                    }

                });


            }
//------------------------update------------------------------------------------

            $("#comup").click(function () {
                var id = $("#sid").val();
                var studid = $("#studid").val();
                var comname = $("#comname").val();
                var tdate = $("#tdate").val();
                var comgrade = $("#comgrade").val();
                var place = $("#place").val();
                var comstatus = $("#comstatus").val();

                $.ajax({
                    type: 'POST',
                    datatype: 'JSON',
                    url: "competitionreg.php",
                    data: {gradeup: 'gradeup', id: id, studid: studid, comname: comname, tdate: tdate, comgrade: comgrade, place: place, comstatus: comstatus},
                    success: function (data) {

                        $('input[type=text]').val('');
                        getcom();
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



            //-------------------DOB-------------------------------------------------------

            // $('#datetimepicker').data("DateTimePicker").FUNCTION()
//------------------------------combo load-------------------
            function comboload() {
                var comdata = '';

                $.post('competitionreg.php', {loaddrop: 'cat'}, function (e) {

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


            //--------------------load category table--------------------------------------
            function getcom() {
                $.ajax({
                    type: 'POST',
                    url: "competitionreg.php",
                    data: {loadcom: 'loadcom'},
                    success: function (data) {
                        $("#comtab tbody ").html('').append(data);
                    }
                });
            }



            function clear() {

                $("#studid").val("");
                $("#comname").val("");
                $("#date").val("");
                $("#comgrade").val("");
                $("#place").val("");
                $("#comstatus").val("");

            }

        </script>

    </body>

</html>

