<?php

include './connection.php';
//---------- add poto + data---------------------------------
//$fname = $_POST['username'];
$fname = $_POST['fname'];
$memno = $_POST['memno'];
$street1 = $_POST['street1'];
$street2 = $_POST['street2'];
$City = $_POST['City'];
$DOB = $_POST['DOB'];
$dojoname = $_POST['dojoname'];
$Grade = $_POST['Grade'];
$status = $_POST['status'];
$datetime = $_POST['datetime'];

//echo $name;.
$uploaddir = './imgg/';
$filetype = $_FILES['file']['type'];
//echo $filetype;

if ($filetype == 'image/jpeg') {

    $filename = $fname . '.jpg';
    $uploadfile = $uploaddir . '/' . $filename;

    if (!file_exists($uploaddir)) {

        $createfolder = mkdir($uploaddir, 755, TRUE); //permission no
    }

    $image_location = $uploaddir . '/' . $filename;
    $upload_ok = move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);

    if ($upload_ok) {
        $sql = "INSERT INTO student (
name_with_initials,
membership_no,
street_line1,
street_line2,
city,
name_of_dojo,
date_of_birth,
image,
create_time,
`status`,
grade) 
VALUES 
(
'$fname',
'$memno',
'$street1',
'$street2',
'$City',
'$dojoname',
'$DOB',
'$image_location',
'$datetime',
'$status',
'$Grade')";

        $result = mysqli_query($con, $sql);
        if ($result) {
            echo json_encode(0); //success
        } else {
            echo json_encode(1); //query error
        }
    } else {
        echo json_encode(2); //move err
    }
} else {
    echo json_encode(800); //type not eqiua;l
}


?>