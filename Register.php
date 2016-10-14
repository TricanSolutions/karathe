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
                    <div class="col-lg-8" style="padding-left: 90px;">
                        <h3 style="color: #0072c6; position: absolute; left: 100px; top: -10px;">Student Register</h3>
                        <br>
                        <br>
                        <br>
                        <div class="form-horizontal" role="form">
                            <div class="form-group">
                                <label class="control-label col-sm-3"  for="inputsm" >Name with Initials:&nbsp;&nbsp;</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="fname" autofocus="autofocus" placeholder="Enter Name with Initials" >
                                    <input type="hidden" id="sid" placeholder="" >

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-3" for="memno:">Membership No:&nbsp;&nbsp;</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="memno" placeholder="Enter Membership No">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-3" for="Street1:">Street 1:&nbsp;&nbsp;</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="street1" placeholder="Enter Street 1">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="Street2:">Street 2:&nbsp;&nbsp;</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="street2" placeholder="Enter Street 2">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="City:">City :&nbsp;&nbsp;</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="City" placeholder="Enter City">
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
                                <label class="control-label col-sm-3" for="DOB">Date Of Birth:&nbsp;&nbsp;</label>
                                <div class="col-sm-5">
                                    <div  class='input-group date' id='datetimepicker1'>
                                        <input  type='text' class="form-control" id="DOB" date-date-format ="yyyy-mm-dd"/>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>





                            <div class="form-group">
                                <label class="control-label col-sm-3" for="dojoname:">Name Of Dojo:&nbsp;&nbsp;</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="dojoname" placeholder="Enter Name Of Dojo">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="Grade:">Grade:&nbsp;&nbsp;</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="Grade" placeholder="Enter Grade">
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
                                <button type="submit" class="btn btn-info" id="add">Submit</button>
                                <button type="submit" class="btn btn-info" id="up">Update</button>
                            </div>
                            <!--<label class="control-label">Select File</label>
                            <input id="input-4" name="input4[]" type="file" multiple class="file-loading">-->

                            <!--                            <div id="kv-avatar-errors-1" class="center-block" style="width:800px;display:none"></div>
                                                        <form class="text-center" action="/avatar_upload.php" method="post" enctype="multipart/form-data">
                                                            <div class="kv-avatar center-block" style="width:200px">
                                                                <input id="avatar-1" name="avatar-1" type="file" class="file-loading">
                                                            </div>
                                                             include other inputs if needed and include a form submit (save) button 
                                                        </form>-->


                            <!--<div class="potobody">-->

                            <!--</div>-->


                        </div>

                    </div>

                    <!----------->
                    <!--                    <div class=" col-lg-4" >
                                            <h3>Student Image</h3>
                                            <form action="imgupload.php" method="post" enctype="multipart/form-data">
                                                <div class="row">
                                                    <img src="./img/image.png" alt="user" class="preview" id="studentpic" style="width: 213px;height: 250px"/>
                                                </div>
                                                <lable for="file">Filename:</lable>
                                                <input type="file" name="file" id="file"><br>
                                                <input type="submit" name="submit" class="btn-info" value="submit">
                                            </form>
                                        </div>-->
                    <!-------------->

                    <div class="col-lg-4">
                        <h3>Student Image</h3>
                        <hr>
                        <form id="uploadimage" action="" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <img id="previewing" src="img/image.png" style="width: 213px;height: 250px"/>
                            </div>
                            <hr id="line">
                            <div id="selectImage">
                                <label>Select Your Image</label><br/>
                                <input type="file" title="load" name="file" id="file" required />
                                <!--<input type="submit" value="Upload" class="submit" />-->
                                <!--<h6 id="selc" style="color: red"> </h6>-->
                                <input type="lable" class="form-control" id="select" placeholder="Enter Grade">
                            </div>
                        </form>

                    </div>
                    <div class="row">
                        <h4 id='loading' >loading..</h4>
                        <div id="message"></div> 
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
                                <h3 class="panel-title">Details of Student</h3>
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
                                <table id="stud" class="table table-bordered table-striped table-hover datable userLevelTble">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Membership No</th>
<!--                                            <th>Street 1</th>
                                            <th>Street 2</th>
                                            <th>City</th>-->
                                            <!--<th>DOB</th>-->
                                            <th>Name Of Dojo</th>
                                            <!--<th>Grade</th>-->
                                            <th>Create time</th>
                                            <th>Update time</th>                                       
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
    </div>
    <?php
    include './FooterImports.php';
    include './footer.php';
    ?>
    <!-- /Footer -->




    <script type="text/javascript">


        $(document).ready(function () {
            getcat();
            $("#up").hide();
            $("#select").hide();
            // $('#datetimepicker1').datepicker()
            //comboload();
            // $('#datetimepicker1').datetimepicker();

            // $("#input-4").fileinput({showCaption: false});
//------------newwwww--****-----------------------

            $(document).ready(function (e) {

//                alert(uname);
                pageProtect();

                $("#uploadimage").on('submit', (function (e) {
                    e.preventDefault();
                    $("#message").empty();
                    $('#loading').show();
                    $.ajax({
                        url: "imgupload.php", // Url to which the request is send
                        type: "POST", // Type of request to be send, called as method
                        data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
                        contentType: false, // The content type used when sending data to the server.
                        cache: false, // To unable request pages to be cached
                        processData: false, // To send DOMDocument or non processed data file it is set to false
                        success: function (data)   // A function to be called if request succeeds
                        {
                            $('#loading').hide();
                            $("#message").html(data);
                        }
                    });
                }));

                ///////////////////////////////////////////////////////////////////
//                datepicker
                $("#datetimepicker1").datepicker({
                    format: "yyyy-mm-dd",
                    autoclose: true,
                    todayBtn: true,
                    pickerPosition: "bottom-left"
                });


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
// -----------------------Function to preview image after validation------------                      
                $(function () {
                    $("#file").change(function () {

                        $("#message").empty(); // To remove the previous error message
                        var file = this.files[0];
                        var imagefile = file.type;
                        var match = ["image/jpeg", "image/png", "image/jpg"];
                        if (!((imagefile == match[0]) || (imagefile == match[1]) || (imagefile == match[2])))
                        {
                            $('#previewing').attr('src', './img/inage.png');
                            $("#message").html("<p id='error'>Please Select A valid Image File</p>" + "<h4>Note</h4>" + "<span id='error_message'>Only jpeg, jpg and png Images type allowed</span>");
                            return false;
                        }
                        else
                        {
                            var reader = new FileReader();
                            reader.onload = imageIsLoaded;
                            reader.readAsDataURL(this.files[0]);

                            var filename = this.files[0].name;
                            $('#select').val(filename);
                        }
                    });
                });
                function imageIsLoaded(e) {

                    $("#file").css("color", "green");
                    $('.row').css("display", "block");
                    $('#previewing').attr('src', e.target.result);
                    $('#previewing').attr('width', '250px');
                    $('#previewing').attr('height', '230px');
                }
                ;
            });
        });

//-----------------photo upload + add data----------------------------------------------

        function upload() {
            var currentdate = new Date();
            var datetime = +currentdate.getFullYear() + "-"
                    + (currentdate.getMonth() + 1) + "-"
                    + currentdate.getDate() + " "
                    + currentdate.getHours() + ":"
                    + currentdate.getMinutes() + ":"
                    + currentdate.getSeconds();

            var upld = document.getElementById('file')
            var fname = $("#fname").val();
            var memno = $("#memno").val();
            var street1 = $("#street1").val();
            var street2 = $("#street2").val();
            var City = $("#City").val();
            var DOB = $("#DOB").val();
            var dojoname = $("#dojoname").val();
            var Grade = $("#Grade").val();
            var status = $("#status").val();

            if (fname == "" || memno == "" || street1 == "" || street2 == "" || City == "" || DOB == "" || dojoname == "" || Grade == "" || status == "")
            {
                if (fname == "")
                {
                    $("#fname").css('border-color', 'red');
                }
                if (memno == "")
                {
                    $("#memno").css('border-color', 'red');
                }
                if (street1 == "")
                {
                    $("#street1").css('border-color', 'red');
                }
                if (street2 == "")
                {
                    $("#street2").css('border-color', 'red');
                }
                if (City == "")
                {
                    $("#City").css('border-color', 'red');
                }
                if (DOB == "")
                {
                    $("#DOB").css('border-color', 'red');
                }
                if (dojoname == "")
                {
                    $("#dojoname").css('border-color', 'red');
                }
                if (Grade == "")
                {
                    $("#Grade").css('border-color', 'red');
                }

                if (status == "")
                {
                    $("#status").css('border-color', 'red');
                }
            }



            if (upld.files.length > 0) {
                //alert('ok');

                var formdata;
                if (window.FormData) {

                    formdata = new FormData();
                    formdata.append('file_upload', 'file_upload');
                    formdata.append('fname', fname);
                    formdata.append('memno', memno);
                    formdata.append('street1', street1);
                    formdata.append('street2', street2);
                    formdata.append('City', City);
                    formdata.append('DOB', DOB);
                    formdata.append('dojoname', dojoname);
                    formdata.append('Grade', Grade);
                    formdata.append('status', status);
                    formdata.append('datetime', datetime);
                    formdata.append('file', upld.files[0]);


                    $.ajax({
                        url: 'imgeupload.php',
                        type: 'POST',
                        data: formdata,
                        processData: false,
                        contentType: false,
                        success: function (res) {

                            var status = parseInt(res);
                            if (status == 0) {
                                alertify.success('succesfully Data saved', 1000);
                                getcat();
                                clear();
                            }
                            else {

                            }
                        }
                    });
                }


            } else {
                //alert('no image');
                swal({title: "Error!", text: "Choose a profile picture!", type: "error", confirmButtonText: "Ok"});
            }
        }



//--------------------------add data to log table---------------------------------------

        function logdata() {

            var fname = $("#fname").val();
            var uname = $('#huname').val();
            var des = fname + " Registerd";
            var currentdate = new Date();
            var datetime = +currentdate.getFullYear() + "-"
                    + (currentdate.getMonth() + 1) + "-"
                    + currentdate.getDate() + " "
                    + currentdate.getHours() + ":"
                    + currentdate.getMinutes() + ":"
                    + currentdate.getSeconds();


            $.ajax({
                type: 'POST',
                datatype: 'JSON',
                url: "EmpReg.php",
                data: {logadd: 'logadd', datetime: datetime, des: des, uname: uname},
                success: function (data) {

                    //getstudent();
                    //clear()
                    if (data == "1") {
                        //alert("succes");
                        alertify.success("save to log", 1000);
//                        getcat();
//                        upload();
//                        //alertify.success("Success log message");
//                        clear();
//
                    } else {
                        // alertify.error("Error Occured in log", 1000);
//                        //alertify.error("Error log message");
//                        //alert("fail")
                    }
                }
            });
//
        }


        $('#add').click(function (e) {
            upload();
            logdata();

        });


        //-------------------------text field color change------------------------------
        $('#fname').on('keyup', function () {
            $('#fname').css({'border-color': ' #ccc'});
        });

        $('#memno ').on('keyup', function () {
            $('#memno ').css({'border-color': ' #ccc'});
        });

        $('#street1 ').on('keyup', function () {
            $('#street1 ').css({'border-color': ' #ccc'});
        });

        $('#street2 ').on('keyup', function () {
            $('#street2 ').css({'border-color': ' #ccc'});
        });

        $('#City ').on('keyup', function () {
            $('#City ').css({'border-color': ' #ccc'});
        });

        $('#DOB ').on('keyup', function () {
            $('#DOB ').css({'border-color': ' #ccc'});
        });

        $('#dojoname ').on('keyup', function () {
            $('#dojoname ').css({'border-color': ' #ccc'});
        });

        $('#Grade ').on('keyup', function () {
            $('#Grade ').css({'border-color': ' #ccc'});
        });

        $('#status').on('keyup', function () {
            $('#status').css({'border-color': ' #ccc'});
        });
//        $("#add1").click(function () {
//
//            var fname = $("#fname").val();
//            var memno = $("#memno").val();
//            var street1 = $("#street1").val();
//            var street2 = $("#street2").val();
//            var City = $("#City").val();
//            var DOB = $("#DOB").val();
//            var dojoname = $("#dojoname").val();
//            var Grade = $("#Grade").val();
//            var status = $("#status").val();
//
//            var currentdate = new Date();
//            var datetime = +currentdate.getFullYear() + "-"
//                    + (currentdate.getMonth() + 1) + "-"
//                    + currentdate.getDate() + " "
//                    + currentdate.getHours() + ":"
//                    + currentdate.getMinutes() + ":"
//                    + currentdate.getSeconds();
//
////alert(datetime);
//            //var status =  $("#sell option:selected").val();
//            //                if (name == "" || status == "")
//            //                {
//            //                    alertify.error("Fill", 1000);
//            //                }
//            //                else {
//
//            $.ajax({
//                type: 'POST',
//                datatype: 'JSON',
//                url: "EmpReg.php",
//                data: {studadd: 'studadd', fname: fname, memno: memno, street1: street1, street2: street2, City: City, DOB: DOB, dojoname: dojoname, datetime: datetime, Grade: Grade, status: status},
//                success: function (data) {
//
//                    //getstudent();
//                    //clear()
//                    if (data == "1") {
//                        //alert("succes");
//                        alertify.success("save", 1000);
//                        getcat();
//                        upload();
//                        //alertify.success("Success log message");
//                        clear();
//
//                    } else {
//                        alertify.error("Error Occured", 1000);
//                        //alertify.error("Error log message");
//                        //alert("fail")
//                    }
//                }
//            });
//
//        });

//        function updatelog(id) {
//            console.log(id)
//
//        }

//----------------update poto + data------------------------------------------
        function update() {
//alert("update function");

            var currentdate = new Date();
            var uptime = +currentdate.getFullYear() + "-"
                    + (currentdate.getMonth() + 1) + "-"
                    + currentdate.getDate() + " "
                    + currentdate.getHours() + ":"
                    + currentdate.getMinutes() + ":"
                    + currentdate.getSeconds();
            var id = $("#sid").val();
            var upld = document.getElementById('file')
            var fname = $("#fname").val();
            var memno = $("#memno").val();
            var street1 = $("#street1").val();
            var street2 = $("#street2").val();
            var City = $("#City").val();
            var DOB = $("#DOB").val();
            var dojoname = $("#dojoname").val();
            var Grade = $("#Grade").val();
            var status = $("#status").val();
            if (upld.files.length > 0) {
                //alert('ok');

                var formdata;
                if (window.FormData) {

                    formdata = new FormData();
                    formdata.append('id', id);
                    formdata.append('upimg', 'upimg');
                    formdata.append('file_upload', 'file_upload');
                    formdata.append('fname', fname);
                    formdata.append('memno', memno);
                    formdata.append('street1', street1);
                    formdata.append('street2', street2);
                    formdata.append('City', City);
                    formdata.append('DOB', DOB);
                    formdata.append('dojoname', dojoname);
                    formdata.append('Grade', Grade);
                    formdata.append('status', status);
                    formdata.append('uptime', uptime);
                    formdata.append('file', upld.files[0]);
                    // (upld.files.length > 0);


                    $.ajax({
                        url: 'imageupdateinfo.php',
                        type: 'POST',
                        data: formdata,
                        processData: false,
                        contentType: false,
                        success: function (res) {

                            var status = parseInt(res);
                            if (status == 0) {
//                                updatelog(id);
                                logup();
                                alertify.success('succesfully Data Updated', 1000);

                                getcat();
                                clear();

                                $("#up").hide();
                                $('#add').show();

                            }
                            else if (status == 800) {
                                alertify.error('file type error', 1000);
                                var image = $("#previewing").attr("src", "img/image.png")
                                $("#previewing").attr("title", "img/image.png")
                            }
                        }
                    });
                }


            } else {
                //alert("NO IMAGE");
                var formdata;
                if (window.FormData) {

                    formdata = new FormData();
                    formdata.append('id', id);
                    formdata.append('noimage', 'upimg');
                    formdata.append('file_upload', 'file_upload');
                    formdata.append('fname', fname);
                    formdata.append('memno', memno);
                    formdata.append('street1', street1);
                    formdata.append('street2', street2);
                    formdata.append('City', City);
                    formdata.append('DOB', DOB);
                    formdata.append('dojoname', dojoname);
                    formdata.append('Grade', Grade);
                    formdata.append('status', status);
                    formdata.append('uptime', uptime);
                    formdata.append('file', upld.files[0]);
                    // (upld.files.length > 0);


                    $.ajax({
                        url: 'imageupdateinfo.php',
                        type: 'POST',
                        data: formdata,
                        processData: false,
                        contentType: false,
                        success: function (res) {

                            var status = parseInt(res);
                            if (status == 0) {
//                                updatelog(id);
                                logup();
                                alertify.success('succesfully Data Updated No imge', 1000);

                                getcat();

                                clear();

                                $("#up").hide();
                                $('#add').show();

                            }
                            else if (status == 800) {
                                alertify.error('file type error', 1000);
                                var image = $("#previewing").attr("src", "img/image.png")
                                $("#previewing").attr("title", "img/image.png")
                            }
                        }
                    });
                }


//                alert('no image');
//                swal({title: "Error!", text: "Choose a profile picture!", type: "error", confirmButtonText: "Ok"});
//$("#selc").html("selct an Image");
            }
        }

//------------------------------------add update data to log---------------------------------
        function logup() {

            var fname = $("#fname").val();
            var des = fname + " Updated";
            var currentdate = new Date();
            var datetime = +currentdate.getFullYear() + "-"
                    + (currentdate.getMonth() + 1) + "-"
                    + currentdate.getDate() + " "
                    + currentdate.getHours() + ":"
                    + currentdate.getMinutes() + ":"
                    + currentdate.getSeconds();


            $.ajax({
                type: 'POST',
                datatype: 'JSON',
                url: "EmpReg.php",
                data: {logup: 'logup', datetime: datetime, des: des},
                success: function (data) {

                    //getstudent();
                    //clear()
                    if (data == "1") {
                        //alert("succes");
                        alertify.success("save to log", 1000);
                        clear();
//                        getcat();
//                        upload();
//                        //alertify.success("Success log message");
//                        clear();
//
                    } else {
                        alertify.error("Error Occured in log", 1000);
//                        //alertify.error("Error log message");
//                        //alert("fail")
                    }
                }
            });
//
        }

        $("#up").click(function () {

            update();
            // logup();

        });

//-------------------------------------------------update-----------------------
//        $("#up2").click(function () {
//            var id = $("#sid").val();
//            var fname = $("#fname").val();
//            var memno = $("#memno").val();
//            var street1 = $("#street1").val();
//            var street2 = $("#street2").val();
//            var City = $("#City").val();
//            var DOB = $("#DOB").val();
//            var dojoname = $("#dojoname").val();
//            var Grade = $("#Grade").val();
//            var status = $("#status").val();
//
//            var currentdate = new Date();
//            var uptime = +currentdate.getFullYear() + "-"
//                    + (currentdate.getMonth() + 1) + "-"
//                    + currentdate.getDate() + " "
//                    + currentdate.getHours() + ":"
//                    + currentdate.getMinutes() + ":"
//                    + currentdate.getSeconds();
//            //var status =  $("#sell option:selected").val();
//            //                if (name == "" || status == "")
//            //                {
//            //                    alertify.error("Fill", 1000);
//            //                }
//            //                else {
//            $.ajax({
//                type: 'POST',
//                datatype: 'JSON',
//                url: "EmpReg.php",
//                data: {studup: 'studup', id: id, fname: fname, memno: memno, street1: street1, street2: street2, City: City, DOB: DOB, dojoname: dojoname, uptime: uptime, Grade: Grade, status: status},
//                success: function (data) {
//
//                    $('input[type=text]').val('');
//                    getcat();
//                    //clear()
//                    if (data == "1") {
//                        //alert("succes");
//                        alertify.success("Updates", 1000);
//                        getcat();
//                        //alertify.success("Success log message");
//                        //clear();
//                    } else {
//                        alertify.error("Error Occured", 1000);
//                        //alertify.error("Error log message");
//                        //alert("fail")
//                    }
//                }
//            });
//
//        });
//




//---------------edit button---------------------------------------------------
        function edit(id) {
            $("#up").show();
            $("#add").hide();
            $.ajax({
                type: 'POST',
                url: "EmpReg.php",
                dataType: 'JSON',
                data: {fill: 'update', id: id},
                success: function (e) {

                    $.each(e, function (index, data) {
                        $("#sid").val(data.id);
                        $("#fname").val(data.name_with_initials);
                        $("#memno").val(data.membership_no);
                        $("#street1").val(data.street_line1);
                        $("#street2").val(data.street_line2);
                        $("#City").val(data.city);
                        $("#DOB").val(data.date_of_birth);
                        $("#dojoname").val(data.name_of_dojo);
                        $("#Grade").val(data.grade);
                        $("#status").val(data.status);
                        $("#previewing").attr("src", data.image);
//                        $("#file").val(data.image);
                        var data1 = data.image;
//                        alert(data1)
                        var arr = data1.split('/');
//                        $("#select").html("<span>" + arr[2]);
                        $("#select").val(arr[2]);

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
                        url: "EmpReg.php",
                        dataType: 'JSON',
                        data: {del: 'delete', id: id},
                        success: function (data) {

                            if (data == "1") {
                                //alert("succes");
                                alertify.success("deleted", 1000);
                                getcat();
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



//-------------------DOB-------------------------------------------------------





//--------------------load category table--------------------------------------
        function getcat() {
            $.ajax({
                type: 'POST',
                url: "EmpReg.php",
                data: {loadstud: 'loadstud'},
                success: function (data) {
                    $("#stud tbody ").html('').append(data);
                }
            });
        }



        function clear() {

            $("#fname").val("");
            $("#memno").val("");
            $("#street1").val("");
            $("#street2").val("");
            $("#City").val("");
            $("#DOB").val("");
            $("#dojoname").val("");
            $("#Grade").val("");
            $("#status").val("");
            $("#previewing").attr("src", "img/image.png");
            $("#file").val("");
        }
        //------------------------log out------------------------------------------------


    </script>

</body>

</html>
